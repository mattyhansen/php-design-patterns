<?php

namespace DesignPatterns\Creational\Prototype;
require '../../vendor/autoload.php';

$timeStart = microtime(true);
define('PAGE_COUNT', 50000);

echo 'Cloning is quicker because it doesn\'t run the constructor<hr/>';


/**
 * Clone object test
 */
$fooPrototype = new FooPagePrototype();
$barPrototype = new BarPagePrototype();

for ($i = 0; $i < PAGE_COUNT; $i++) {
    $page = clone $fooPrototype;
    $page->setTitle('Foo Page No ' . $i);
}

for ($i = 0; $i < PAGE_COUNT; $i++) {
    $page = clone $barPrototype;
    $page->setTitle('Bar Page No ' . $i);
}

echo '<strong>Clone object test = </strong> ' . number_format(microtime(true) - $timeStart, 3)  . ' seconds<br/>';
echo '<pre>
for ($i = 0; $i < ' . PAGE_COUNT . '; $i++) {
    $page = clone $fooPrototype;
    $page->setTitle("Foo Page No ".$i);
}
for ($i = 0; $i < ' . PAGE_COUNT . '; $i++) {
    $page = clone $barPrototype;
    $page->setTitle("Bar Page No ".$i);
}</pre>';
echo '<hr/>';


/**
 * New object test
 */
for ($i = 0; $i < PAGE_COUNT; $i++) {
    $page = new FooPagePrototype();
    $page->setTitle('Foo Page No ' . $i);
}
for ($i = 0; $i < PAGE_COUNT; $i++) {
    $page = new BarPagePrototype();
    $page->setTitle('Bar Page No ' . $i);
}

echo '<strong>New object test = </strong> ' . number_format(microtime(true) - $timeStart, 3)  . ' seconds<br/>';
echo '<pre>
for ($i = 0; $i < ' . PAGE_COUNT . '; $i++) {
    $page = new FooPagePrototype();
    $page->setTitle("Foo Page No ".$i);
}
for ($i = 0; $i < ' . PAGE_COUNT . '; $i++) {
    $page = new BarPagePrototype();
    $page->setTitle("Bar Page No ".$i);
}</pre>';
