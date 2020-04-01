<?php


namespace Anatskyi\Meta;


class MetaService
{
    protected  $property = 'Meta';
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
    public function getPropertyValue()
    {
        return $this->property .' '. $this->value;
    }
}
