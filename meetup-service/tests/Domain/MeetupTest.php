<?php

use Phpse\Meetups\Domain\Meetup;

class MeetupTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Meetup
     */
    private $meetup;

    public function setUp()
    {

        $uuid = $this->getMockBuilder('\Phpse\Meetups\Domain\Uuid')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        $this->meetup = new Meetup($uuid, 'title', new \DateTime('2012-02-01'), 1000, false);
    }


    public function testInstanceOfMeetup()
    {
        $this->assertTrue($this->meetup instanceof Meetup);
    }

    public function testGetTitleMethod()
    {
        $this->assertEquals($this->meetup->getTitle(), 'title');
    }

    public function testGetDateMethod()
    {
        $this->assertEquals($this->meetup->getDate(), new \DateTime('2012-02-01'));
    }

    public function testGetCapacityMethod()
    {
        $this->assertEquals($this->meetup->getCapacity(), 1000);
    }

    public function testGetFreeMethod()
    {
        $this->assertFalse($this->meetup->getFree());
    }
}