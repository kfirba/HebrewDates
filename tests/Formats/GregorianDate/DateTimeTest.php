<?php

use PHPUnit\Framework\TestCase;
use Kfirba\Formats\GregorianDate\DateTime;

class DateTimeTest extends TestCase
{
    /** @test */
    public function it_returns_a_datetime_instance()
    {
        $formatter = new DateTime([6, 5, 2016]);

        $this->assertInstanceOf(\DateTime::class, $formatter->format());
    }
}
