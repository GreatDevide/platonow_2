<?php
use platonov\Sqr;
use platonov\PlatonovException;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SqrtTest extends TestCase {

    /**
     * @dataProvider providerSolve
     */
    public function testSolve($a, $b, $c, $res) {
        $fTest = new Sqr();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }

    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[0.0 ,-0.6]),
            array (1, 6, -40,[ 4.0,-10.0]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2.0]),
            array (false, true, 1==0, [0]),
        );
    }

    /**
     * @dataProvider providerSolveWithExc
     */

    public function testSolveWithExc($a, $b, $c, $res) {
        $this->expectException(PlatonovException::class);
        $fTest = new Sqr();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }

    public function providerSolveWithExc ()
    {
        return array (
            array (0, 0, 0, []),
            array (1, 1, 1, []),
            array (null, null, null,[]),
        );
    }
}