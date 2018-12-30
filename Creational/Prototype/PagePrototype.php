<?php

namespace DesignPattern\Creational\Prototype;

/**
 * class PagePrototype.
 */
abstract class PagePrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $category;

    /**
     * @abstract
     *
     * @return void
     */
    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
