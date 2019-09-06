<?php

/**
 * The JSONMapper library needs the full name path of
 * a class, so there are no imports used instead.
 *
 * @noinspection PhpFullyQualifiedNameUsageInspection
 */

/** @copyright 2019 ng-voice GmbH */

declare(strict_types=1);

namespace NgVoice\AriClient\Models;


/**
 * Represents the state of a device.
 *
 * @package NgVoice\AriClient\Models
 */
final class DeviceState implements Model
{
    /**
     * @var string Name of the device.
     */
    private $name;

    /**
     * @var string Device's state
     * ("UNKNOWN", "NOT_INUSE", "INUSE", "BUSY", "INVALID", "UNAVAILABLE", "RINGING", "RINGINUSE", "ONHOLD").
     */
    private $state;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }
}