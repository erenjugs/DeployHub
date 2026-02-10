<?php
/**
 * Tests for DeployHub
 */

use PHPUnit\Framework\TestCase;
use Deployhub\Deployhub;

class DeployhubTest extends TestCase {
    private Deployhub $instance;

    protected function setUp(): void {
        $this->instance = new Deployhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Deployhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
