<?php

/** @copyright 2019 ng-voice GmbH */

declare(strict_types=1);

namespace NgVoice\AriClient\Models\Message;

use NgVoice\AriClient\Models\Bridge;

/**
 * Notification that a bridge has been destroyed.
 *
 * @package NgVoice\AriClient\Models\Message
 *
 * @author Lukas Stermann <lukas@ng-voice.com>
 */
final class BridgeDestroyed extends Event
{
    /**
     * @var Bridge
     */
    private $bridge;

    /**
     * @return Bridge
     */
    public function getBridge(): Bridge
    {
        return $this->bridge;
    }

    /**
     * @param Bridge $bridge
     */
    public function setBridge(Bridge $bridge): void
    {
        $this->bridge = $bridge;
    }
}