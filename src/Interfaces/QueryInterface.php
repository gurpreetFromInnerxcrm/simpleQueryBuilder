<?php

namespace QueyrBuilder\Query;


interface QueryInterface
{
    public function select(...$columns): self;
    public function from(string $table): self;
    public function where($condition): self;
    public function join($join): self;
    // Add more methods for other parts of the query.
    public function build(): string;
}
