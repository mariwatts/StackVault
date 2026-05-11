<?php
/**
 * Tests for StackVault
 */

use PHPUnit\Framework\TestCase;
use Stackvault\Stackvault;

class StackvaultTest extends TestCase {
    private Stackvault $instance;

    protected function setUp(): void {
        $this->instance = new Stackvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Stackvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
