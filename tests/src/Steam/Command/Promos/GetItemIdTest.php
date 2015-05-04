<?php

namespace Steam\Command\Promos;

class GetItemIdTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GetItemId
     */
    protected $instance;

    public function setUp()
    {
        $this->instance = new GetItemId(123, 456, 789);
    }

    public function testValues()
    {
        $this->assertEquals('ITFPromos_123', $this->instance->getInterface());
        $this->assertEquals('GetItemId', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([
            'steamid' => 456,
            'promoid' => 789,
        ], $this->instance->getParams());
    }
}