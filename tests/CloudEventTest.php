<?php

declare(strict_types=1);

namespace Treblle\CloudEvent\Tests;

use PHPUnit\Framework\Attributes\Test;
use Treblle\CloudEvent\CloudEvent;

final class CloudEventTest extends PackageTestCase
{
    #[Test]
    public function it_can_create_an_event(): void
    {
        $this->assertInstanceOf(
            expected: CloudEvent::class,
            actual: $this->event(),
        );
    }

    #[Test]
    public function it_can_create_an_event_from_an_array(): void
    {
        $this->assertInstanceOf(
            expected: CloudEvent::class,
            actual: CloudEvent::make(
                data: $this->data(),
            ),
        );
    }

    #[Test]
    public function it_can_cast_the_object_to_an_array(): void
    {
        $this->assertIsArray(
            actual: $this->event()->toArray(),
        );
    }
}
