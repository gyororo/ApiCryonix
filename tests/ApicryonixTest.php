<?php
/**
 * Tests for ApiCryonix
 */

use PHPUnit\Framework\TestCase;
use Apicryonix\Apicryonix;

class ApicryonixTest extends TestCase {
    private Apicryonix $instance;

    protected function setUp(): void {
        $this->instance = new Apicryonix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apicryonix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
