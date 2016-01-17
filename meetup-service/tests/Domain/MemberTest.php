<?php

use Phpse\Meetups\Domain\Member;

class MemberTest extends \PHPUnit_Framework_TestCase
{
    const UUID_VALUE = '99999';
    const USER_NAME = 'some user';
    const USER_EMAIL = 'some.user@mail.com';
    /**
     * @var Member
     */
    private $member;

    public function setUp()
    {
        $uuid = $this->getUuidMock();
        $this->member = new Member($uuid, self::USER_NAME, self::USER_EMAIL);
    }

    public function testGetIdentifierMethod()
    {
        $this->assertEquals($this->member->getIdentifier(), self::UUID_VALUE);
    }

    public function testGetNameMethod()
    {
        $this->assertEquals($this->member->getName(), self::USER_NAME);
    }

    public function testGetMailMethod()
    {
        $this->assertEquals($this->member->getEmail(), self::USER_EMAIL);
    }

    private function getUuidMock()
    {
        $uuid = $this->getMockBuilder('Phpse\Meetups\Domain\Uuid')
            ->disableOriginalConstructor()
            ->getMock()
        ;
        $uuid
            ->expects($this->any())
            ->method('__toString')
            ->will($this->returnValue(self::UUID_VALUE))
        ;
        return $uuid;
    }
}