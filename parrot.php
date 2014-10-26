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


class Parrot extends Bird implements BirdInterface
{
    private $word;

    function __construct($word, $color, $name)
    {
        $this->word = $word;
        parent::__construct($color,$name);
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
        return $this->getColor() . " parrot " . $this->getName() . " say: " . $this->getWord();
    }

    public function fly()
    {
        echo "Fly";
    }
}
