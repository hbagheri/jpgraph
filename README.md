<h1 align="center">JpGraph Community Edition v4.1.1 (Fork by Hassan Bagheri)</h1>

<p align="center">
<a href="https://packagist.org/packages/hbagheri/jpgraph">
<img src="https://img.shields.io/packagist/v/hbagheri/jpgraph" alt="Packagist Version">
</a>
<a href="https://packagist.org/packages/hbagheri/jpgraph">
<img src="https://img.shields.io/packagist/dm/hbagheri/jpgraph.svg" alt="Packagist Downloads">
</a>
<a href="https://github.com/hbagheri/jpgraph/actions">
<img src="https://github.com/hbagheri/jpgraph/workflows/Tests/badge.svg" alt="GitHub Actions Status">
</a>
</p> 

**این نسخه فورک شده JpGraph Community Edition v4.1.0 است که تنها تغییرات اعمال شده حذف توابع deprecated و سازگاری کامل با PHP 8.2 می‌باشد.**  

---

## درباره این فورک

این فورک بر پایه نسخه [JpGraph Community Edition v4.1.0](https://github.com/amenadiel/jpgraph) ساخته شده است که کاملاً با PHP 8.2 سازگار است و توابع و هشدارهای deprecated حذف یا اصلاح شده‌اند.

تمامی تغییرات فقط به هدف بروزرسانی سازگاری با نسخه‌های جدید PHP انجام شده و هیچ تغییر عملکردی یا ویژگی جدیدی به کتابخانه اضافه نشده است.

این پروژه همچنان کاملاً منطبق با استانداردهای PSR-1, PSR-2 و PSR-4 باقی مانده است.

---

## ویژگی‌ها

- سازگار با PHP 8.2 و حذف هشدارهای deprecated
- حفظ ساختار PSR-4 و namespaces برای autoloading استاندارد
- حفظ تمامی قابلیت‌های اصلی نسخه اصلی JpGraph CE
- توابع و کدهای منسوخ PHP اصلاح شده بدون تغییر در منطق اصلی
- توزیع از طریق Packagist (فورک شخصی hbagheri/jpgraph)

---

## نیازمندی‌ها و نصب

- این نسخه نیازمند PHP 7.2 به بالا است، ولی برای بهترین تجربه PHP 8.2 توصیه می‌شود.
- برای نصب کافی است از composer استفاده کنید:

```sh
composer require hbagheri/jpgraph
```
## استفاده
همانند نسخه اصلی JpGraph، کافی است در پروژه خود composer install کنید و سپس از autoload استفاده کنید:
```php
require_once 'vendor/autoload.php';

use hbvsoft\JpGraph\Graph;
use hbvsoft\JpGraph\Plot;

// ایجاد نمودار پای
$graph = new Graph\PieGraph(350, 250);
$graph->title->Set("A Simple Pie Plot");
$graph->SetBox(true);

$data = [40, 21, 17, 14, 23];
$p1 = new Plot\PiePlot($data);
$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(['#1E90FF', '#2E8B57', '#ADFF2F', '#DC143C', '#BA55D3']);

$graph->Add($p1);
$graph->Stroke();

