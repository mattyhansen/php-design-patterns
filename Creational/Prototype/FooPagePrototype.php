<?php

namespace DesignPattern\Creational\Prototype;

/**
 * Class FooPagePrototype.
 */
class FooPagePrototype extends PagePrototype
{

    /**
     * FooPagePrototype constructor.
     */
    public function __construct()
    {
        $this->category = 'Foo';
    }

    /**
     * empty clone.
     */
    public function __clone()
    {
    }
}
