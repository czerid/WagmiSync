<?php
/**
 * Tests for WagmiSync
 */

use PHPUnit\Framework\TestCase;
use Wagmisync\Wagmisync;

class WagmisyncTest extends TestCase {
    private Wagmisync $instance;

    protected function setUp(): void {
        $this->instance = new Wagmisync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Wagmisync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
