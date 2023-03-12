<?php declare(strict_types=1);

// to run test ./vendor/bin/phpunit tests

use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertTrue(true);
    }
}
