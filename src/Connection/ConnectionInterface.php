<?php

namespace QueryBuilder\Connection;

interface ConnectionInterface
{
    public function executeQuery($query): array;
}
