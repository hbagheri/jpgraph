<?php
namespace HBVSoft\Charts;

use HBVSoft\Charts\Strategies\ChartStrategyInterface;

abstract class AbstractChart
{
    protected ChartStrategyInterface $strategy;
    protected string $title = '';
    protected array $data = [];

    public function __construct(ChartStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    abstract public function build();
    abstract public function render();
}
