<?php
/**
 * Tests for chainSurge
 */

use PHPUnit\Framework\TestCase;
use Chainsurge\Chainsurge;

class ChainsurgeTest extends TestCase {
    private Chainsurge $instance;

    protected function setUp(): void {
        $this->instance = new Chainsurge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainsurge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
