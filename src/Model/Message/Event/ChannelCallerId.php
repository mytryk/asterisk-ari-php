<?php

/** @copyright 2020 ng-voice GmbH */

declare(strict_types=1);

namespace NgVoice\AriClient\Model\Message\Event;

use NgVoice\AriClient\Model\Channel;

/**
 * Channel changed Caller ID.
 *
 * @package NgVoice\AriClient\Model\Message\Event
 *
 * @author Lukas Stermann <lukas@ng-voice.com>
 */
final class ChannelCallerId extends Event
{
    private string $callerPresentationTxt;

    private int $callerPresentation;

    private Channel $channel;

    /**
     * The text representation of the Caller Presentation value.
     *
     * @return string
     */
    public function getCallerPresentationTxt(): string
    {
        return $this->callerPresentationTxt;
    }

    /**
     * The integer representation of the Caller Presentation value.
     *
     * @return int
     */
    public function getCallerPresentation(): int
    {
        return $this->callerPresentation;
    }

    /**
     * The channel that changed Caller ID.
     *
     * @return Channel
     */
    public function getChannel(): Channel
    {
        return $this->channel;
    }
}