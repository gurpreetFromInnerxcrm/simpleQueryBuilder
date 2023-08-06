<?php

namespace QueyrBuilder\Components\Interfaces\Conditions;

class WhereCondition
{
    protected $column;
    protected $operator;
    protected $value;

    public function __construct(string $column, string $operator, $value)
    {
        $this->column = $column;
        $this->operator = $operator;
        $this->value = $value;
    }

    public function build(): string
    {
        return "{$this->column} {$this->operator} '{$this->value}'";
    }
}
