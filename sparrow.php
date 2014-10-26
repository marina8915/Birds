<?php
/**
 * class Sparrow
 *
 * Created by PhpStorm.
 * User: marina
 * Date: 24.10.14
 * Time: 16:48
 */

use \bird;

class Sparrow extends Bird implements BirdInterface
{
    public function voice()
    {
        return $this->getColor() . " sparrow " . $this->getName() . " say: chirik-chirik";
    }

    public function fly()
    {
        echo "Fly";
    }
}