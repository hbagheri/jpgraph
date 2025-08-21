<?php
namespace HBVSoft\Charts;

class NonAxisChart extends AbstractChart
{
    protected $graph;

    public function build()
    {
        $this->graph = 'JPGraph Object Placeholder';
    }

    public function render()
    {
        return $this->strategy->render($this->graph, $this->data);
    }
}
