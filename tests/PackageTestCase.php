<?php

declare(strict_types=1);

namespace Treblle\CloudEvent\Tests;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Treblle\CloudEvent\CloudEvent;

abstract class PackageTestCase extends TestCase
{
    protected function event(): CloudEvent
    {
        return new CloudEvent(
            id: '12345',
            source: '/some-url',
            type: 'com.vendor.action.event',
            data: json_encode(['foo' => 'bar']),
            data_content_type: 'application/json',
            data_schema: null,
            subject: 'cloud-event.json',
            time: new DateTimeImmutable(),
        );
    }

    protected function data(): array
    {
        return [
            'id' => '1234',
            'source' => '/some-url',
            'type' => 'com.vendor.action.event',
            'data' => json_encode(['foo' => 'bar']),
            'data_content_type' => 'application/json',
            'data_schema' => null,
            'subject' => 'cloud-event.json',
            'time' => '01/01/1234',
        ];
    }
}
