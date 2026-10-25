<?php
/**
 * Tests for DaoCadence
 */

use PHPUnit\Framework\TestCase;
use Daocadence\Daocadence;

class DaocadenceTest extends TestCase {
    private Daocadence $instance;

    protected function setUp(): void {
        $this->instance = new Daocadence(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daocadence::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
