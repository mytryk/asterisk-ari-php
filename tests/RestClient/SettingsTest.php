<?php

/** @copyright 2019 ng-voice GmbH */

declare(strict_types=1);

namespace NgVoice\AriClient\Tests\RestClient;

use NgVoice\AriClient\RestClient\Settings;
use PHPUnit\Framework\TestCase;

/**
 * Class SettingsTest
 *
 * @package NgVoice\AriClient\Tests\RestClient
 *
 * @author Ahmad Hussain <ahmad@ng-voice.com>
 */
class SettingsTest extends TestCase
{
    public function testAriClientSettingsParams(): void
    {
        /**
         * @var $ariClientSettings
         */

        $ariClientSettings = new Settings(
            'someUser',
            'password',
        );
        $ariClientSettings->setHttpsEnabled(true);
        $ariClientSettings->setHost('127.1.1.1');
        $ariClientSettings->setPort(4000);
        $ariClientSettings->setRootUri('/ari');

        $this->assertSame('someUser', $ariClientSettings->getUser());
        $this->assertSame('password', $ariClientSettings->getPassword());
        $this->assertTrue($ariClientSettings->isHttpsEnabled());
        $this->assertSame('127.1.1.1', $ariClientSettings->getHost());
        $this->assertSame(4000, $ariClientSettings->getPort());
        $this->assertSame('/ari', $ariClientSettings->getRootUri());
    }
}