<?php

use platonov\Line;
use platonov\PlatonovException;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class LineTest extends TestCase {

    /**
     * @dataProvider providerLine
     */

    public function testLine($a, $b, $res) {
        $fTest = new Line();
        $this->assertEquals($res, $fTest->equation($a, $b));
    }

    public function providerLine ()
    {
        return array (
            array (3, 3, [-1]),
            array (1, 1, [-1]),
            array (1, 2, [-2]),
        );
    }

    /**
     * @dataProvider providerLineWithExc
     */

    public function testLineWithExc($a, $b, $res) {
        $this->expectException(PlatonovException::class);
        $fTest = new Line();
        $this->assertEquals($res, $fTest->equation($a, $b));
    }

    public function providerLineWithExc ()
    {
        return array (
            array (0, 0, 0),
            array ('a', 'b', 0),
            array (false, true, 0),
            array (null, null, 0),
        );
    }
}