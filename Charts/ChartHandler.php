<?php

namespace HBVSoft\Charts;

class ChartHandler
{
    protected AbstractChart $chart;

    public function __construct(AbstractChart $chart)
    {
        $this->chart = $chart;
    }

    public function display()
    {
        $this->chart->build();
        return $this->chart->render();
    }
}
