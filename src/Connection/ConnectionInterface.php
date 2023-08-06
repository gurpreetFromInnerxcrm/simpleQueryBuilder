<?php

namespace robinksp\querybuilder\Connection;

interface ConnectionInterface
{
    public function executeQuery($query): array;
}
