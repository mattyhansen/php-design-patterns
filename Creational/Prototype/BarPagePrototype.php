<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BarPagePrototype.
 */
class BarPagePrototype extends PagePrototype
{

    /**
     * BarPagePrototype constructor.
     */
    public function __construct()
    {
        $this->category = 'Bar';
    }

    /**
     * empty clone.
     */
    public function __clone()
    {
    }
}
