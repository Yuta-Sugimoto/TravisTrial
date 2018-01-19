<?php

use PHPUnit\Framework\TestCase;
use Sample\Calc;

class CalcTest extends TestCase
{

    public function testSub()
    {
        $calc = new Calc();
        $this->assertEquals($calc->sub(3, 2), 1);
    }
}
?>