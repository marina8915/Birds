<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 24.10.14
 * Time: 16:51
 */

use \parrot;
use \sparrow;

include "autoloader.php";

$parrot = new Parrot("Hello", "yellow", "Djinn");
$sparrow = new Sparrow("gray", "Jack");

echo $parrot->voice();
echo "<br/>";
$parrot->fly();
echo "<br/>";

echo $sparrow->voice();
echo "<br/>";
$sparrow->fly();
