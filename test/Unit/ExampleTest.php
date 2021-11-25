<?php

declare(strict_types=1);

namespace Lctrs\Library\Test\Unit;

use Lctrs\Library\Example;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @covers \Lctrs\Library\Example
 */
final class ExampleTest extends TestCase
{
    public function testFromNameReturnsExample(): void
    {
        $example = Example::fromName('foo');

        self::assertSame('foo', $example->name());
    }
}
