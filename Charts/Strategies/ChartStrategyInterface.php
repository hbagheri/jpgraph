<?php

namespace HBVSoft\Charts\Strategies;

interface ChartStrategyInterface
{
    /**
     * @param mixed $graph   main jpgraph object
     * @param array $data   data
     * @return mixed
     *
     * this method is mandatory
     */
    public function render($graph, array $data);
}
