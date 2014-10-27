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

class Sparrow extends AbstractBird implements FlyableInterface
{
    public function voice()
    {
        $format = '%s sparrow %s say: chirik-chirik';
        $color = $this->getColor();
        $name = $this->getName();
        return sprintf($format, $color, $name);
    }

    public function fly()
    {
        echo "Fly";
    }
}