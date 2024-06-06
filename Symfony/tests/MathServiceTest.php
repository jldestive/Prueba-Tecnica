<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    public function test_add(): void {
        $mathService = new \App\Service\MathService();
        $this->assertEquals(4, $mathService->add(2, 2));
    }
}
