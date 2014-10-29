<?php
/**
 * abstract class AbstractBird
 *
 * Created by PhpStorm.
 * User: marina
 * Date: 24.10.14
 * Time: 15:05
 */

abstract class AbstractBird
{
    public $color;
    public $name;

    public function __construct($color, $name)
    {
        $this->color = $color;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    abstract public function voice();
}