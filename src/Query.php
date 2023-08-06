<?php

namespace robinksp\querybuilder;

use Exception;
use robinksp\querybuilder\Connection\Mysql;


class Query extends Mysql
{
    protected $select = '*';

    protected $insert = [];
    protected $table;
    protected $where = [];
    protected $joins = [];

    public function select(...$columns): self
    {
        $this->select = implode(', ', $columns);
        return $this;
    }

    public function table(string $table): self
    {
        $this->table = $table;
        return $this;
    }

    public function where($condition): self
    {
        $this->where[] = $condition;
        return $this;
    }

    public function join($join): self
    {
        $this->joins[] = $join;
        return $this;
    }

    public function insert(array $data)
    {
        if (empty($this->table) || empty($data)) {
            throw new Exception("Table and data must be set before building the insert query.");
        }

        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_map(fn ($value) => $this->quoteValue($value), $data));
        $query = "INSERT INTO {$this->table} ($columns) VALUES ($values)";

        try {
            $this->executeQuery($query);
            return $this->pdo->lastInsertId();
        } catch (\Throwable $th) {
            throw $th;
        }

    }
    private function quoteValue($value)
    {
        // Check if the value is a string, if so, escape and add quotes.
        if (is_string($value)) {
            return "'" . addslashes($value) . "'";
        }

        // If it's not a string, just return the value as is.
        return $value;
    }
    // Add more methods for other parts of the query.

    public function build(): string
    {
        $query = "SELECT {$this->select} FROM {$this->table}";

        foreach ($this->joins as $join) {
            $query .= " " . $join->build();
        }

        if (!empty($this->where)) {
            $conditions = implode(' AND ', array_map(fn ($condition) => $condition->build(), $this->where));
            $query .= " WHERE $conditions";
        }

        return $query;
    }

}
