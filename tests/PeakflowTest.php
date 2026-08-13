<?php
/**
 * Tests for PeakFlow
 */

use PHPUnit\Framework\TestCase;
use Peakflow\Peakflow;

class PeakflowTest extends TestCase {
    private Peakflow $instance;

    protected function setUp(): void {
        $this->instance = new Peakflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
