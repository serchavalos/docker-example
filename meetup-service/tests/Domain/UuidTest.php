<?php

use Phpse\Meetups\Domain\Uuid;

class UuidTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Uuid
     */
    private $uuid;

    public function setUp()
    {
        $this->uuid = new Uuid('99999');
    }

    public function testGetValueMethod()
    {
        $this->assertEquals($this->uuid->getValue(), '99999');
    }

    public function testToStringMethod()
    {
        $this->assertEquals($this->uuid, '99999');
    }
}