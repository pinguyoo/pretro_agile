<?php

namespace Tests\Unit;
use App\PincodeGenerator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PincodeGeneratorTest extends TestCase
{
    /**
     * Test if the return value is number or not
     *
     * @return void
     */
    public function testGenerateCode()
    {
        $generator = new PincodeGenerator;
        $number = $generator->generateCode();
        $this->assertTrue(is_int($number));
    }
}
