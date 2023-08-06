<?php

namespace simpleQueryBuilder\Connection;

interface ConnectionInterface
{
    public function executeQuery($query): array;
}
