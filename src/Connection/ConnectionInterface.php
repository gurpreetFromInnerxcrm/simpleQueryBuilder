<?php

namespace Builder\Connection;

interface ConnectionInterface
{
    public function executeQuery($query): array;
}
