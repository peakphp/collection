<?php

namespace Peak\Collection;

use \Exception;

abstract class AbstractImmutableStructure extends AbstractStructure
{
    /**
     * @param string $name
     * @param $value
     * @throws Exception
     */
    public function __set(string $name, $value)
    {
        throw new Exception('Cannot modify a immutable structure');
    }
}