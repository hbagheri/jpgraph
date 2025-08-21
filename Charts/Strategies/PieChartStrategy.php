<?php
namespace HBVSoft\Charts\Strategies;

class PieChartStrategy implements ChartStrategyInterface
{
    public function render($graph, array $data)
    {
        return "Rendering PieChart with data: " . json_encode($data);
    }
}
