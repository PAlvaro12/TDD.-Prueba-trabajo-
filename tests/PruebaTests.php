<?php

use PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase
{

    /** @test */
    public function Test_comprobar_que_uno_es_uno()
    {
        $this->assertEquals(1, 1);
    }
}