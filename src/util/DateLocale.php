<?php

/**
 * JPGraph v4.0.3
 */

namespace Amenadiel\JpGraph\Util;

/**
 * @class DateLocale
 * // Description: Hold localized text used in dates
 */
class DateLocale
{
    public $iLocale = 'C'; // environmental locale be used by default
    private $iDayAbb;
    private $iShortDay;
    private $iShortMonth;
    private $iMonthName;

    public function __construct()
    {
        settype($this->iDayAbb, 'array');
        settype($this->iShortDay, 'array');
        settype($this->iShortMonth, 'array');
        settype($this->iMonthName, 'array');
        $this->Set('C');
    }

    public function Set($aLocale)
    {
        if (in_array($aLocale, array_keys($this->iDayAbb), true)) {
            $this->iLocale = $aLocale;

            return true; // already cached nothing else to do!
        }

        $pLocale = setlocale(LC_TIME, 0); // get current locale for LC_TIME

        if (is_array($aLocale)) {
            foreach ($aLocale as $loc) {
                $res = @setlocale(LC_TIME, $loc);
                if ($res) {
                    $aLocale = $loc;

                    break;
                }
            }
        } else {
            $res = @setlocale(LC_TIME, $aLocale);
        }

        if (!$res) {
            JpGraphError::RaiseL(25007, $aLocale);
            //("You are trying to use the locale ($aLocale) which your PHP installation does not support. Hint: Use '' to indicate the default locale for this geographic region.");
            return false;
        }

        $this->iLocale = $aLocale;

        $this->iDayAbb[$aLocale] = [];
        $this->iShortDay[$aLocale] = [];

        $formatterDay = new \IntlDateFormatter(
            $aLocale,
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::NONE,
            date_default_timezone_get(),
            \IntlDateFormatter::GREGORIAN,
            'EEE'
        );

        $formatterDayFull = new \IntlDateFormatter(
            $aLocale,
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::NONE,
            date_default_timezone_get(),
            \IntlDateFormatter::GREGORIAN,
            'EEEE'
        );

        $baseDate = new \DateTime('Sunday');

        for ($i = 0; $i < 7; $i++) {
            $date = clone $baseDate;
            $date->modify("+{$i} day");

            $short = $formatterDay->format($date);
            $full = $formatterDayFull->format($date);
            $firstLetter = mb_strtoupper(mb_substr($short, 0, 1), 'UTF-8');

            $this->iDayAbb[$aLocale][] = $firstLetter;
            $this->iShortDay[$aLocale][] = $short;
        }

        $this->iShortMonth[$aLocale] = [];
        $this->iMonthName[$aLocale] = [];

        $formatterMonthShort = new \IntlDateFormatter(
            $aLocale,
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::NONE,
            date_default_timezone_get(),
            \IntlDateFormatter::GREGORIAN,
            'MMM'
        );

        $formatterMonthFull = new \IntlDateFormatter(
            $aLocale,
            \IntlDateFormatter::FULL,
            \IntlDateFormatter::NONE,
            date_default_timezone_get(),
            \IntlDateFormatter::GREGORIAN,
            'MMMM'
        );

        for ($i = 1; $i <= 12; ++$i) {
            $date = new \DateTime("2001-$i-01");

            $short = $formatterMonthShort->format($date);
            $full = $formatterMonthFull->format($date);

            $this->iShortMonth[$aLocale][] = ucfirst($short);
            $this->iMonthName[$aLocale][] = ucfirst($full);
        }

        setlocale(LC_TIME, $pLocale);


        return true;
    }

    public function GetDayAbb()
    {
        return $this->iDayAbb[$this->iLocale];
    }

    public function GetShortDay()
    {
        return $this->iShortDay[$this->iLocale];
    }

    public function GetShortMonth()
    {
        return $this->iShortMonth[$this->iLocale];
    }

    public function GetShortMonthName($aNbr)
    {
        return $this->iShortMonth[$this->iLocale][$aNbr];
    }

    public function GetLongMonthName($aNbr)
    {
        return $this->iMonthName[$this->iLocale][$aNbr];
    }

    public function GetMonth()
    {
        return $this->iMonthName[$this->iLocale];
    }
}
