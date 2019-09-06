<?php

/** @copyright 2019 ng-voice GmbH */

declare(strict_types=1);

namespace NgVoice\AriClient\Tests\Models\Message;


use JsonMapper_Exception;
use NgVoice\AriClient\Models\{Channel, Message\ChannelDialplan};
use NgVoice\AriClient\Tests\Helper;
use PHPUnit\Framework\TestCase;

/**
 * Class ChannelDialplanTest
 *
 * @package NgVoice\AriClient\Tests\Models\Message
 */
final class ChannelDialplanTest extends TestCase
{
    /**
     * @throws JsonMapper_Exception
     */
    public function testParametersMappedCorrectly(): void
    {
        $exampleChannel = [
            'name' => 'SIP/foo-0000a7e3',
            'language' => 'en',
            'accountcode' => 'TestAccount',
            'channelvars' => [
                'testVar' => 'correct',
                'testVar2' => 'nope'
            ],
            'caller' => [
                'name' => 'ExampleName',
                'number' => 'ExampleNumber'
            ],
            'creationtime' => '2016-12-20 13:45:28 UTC',
            'state' => 'Up',
            'connected' => [
                'name' => 'ExampleName2',
                'number' => 'ExampleNumber2'
            ],
            'dialplan' => [
                'context' => 'ExampleContext',
                'exten' => 'ExampleExten',
                'priority' => '3'
            ],
            'id' => '123456'
        ];

        /**
         * @var ChannelDialplan $channelDialplan
         */
        $channelDialplan = Helper::mapMessageParametersToAriObject(
            'ChannelDialplan',
            [
                'dialplan_app' => 'ExampleApp',
                'dialplan_app_data' => 'ExampleAppData',
                'channel' => $exampleChannel
            ]
        );
        $this->assertInstanceOf(Channel::class, $channelDialplan->getChannel());
        $this->assertSame('ExampleApp', $channelDialplan->getDialplanApp());
        $this->assertSame('ExampleAppData', $channelDialplan->getDialplanAppData());
    }
}