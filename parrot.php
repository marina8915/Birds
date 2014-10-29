<?php
/**
 * class Parrot
 *
 * Created by PhpStorm.
 * User: marina
 * Date: 24.10.14
 * Time: 16:23
 */

use \bird;

class Parrot extends AbstractBird implements FlyableInterface
{
    private $word;

    function __construct($word, $color, $name)
    {
        $this->word = $word;
        parent::__construct($color, $name);
    }

    /**
     * getWord
     */
    public function getWord()
    {
        return $this->word;
    }

    public function voice()
    {
        $format = '%s parrot %s say: %s';
        $color = $this->getColor();
        $name = $this->getName();
        $word = $this->getWord();
        return sprintf($format, $color, $name, $word);
    }

    public function fly()
    {
        echo "Fly";
    }
}
