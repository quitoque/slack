<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/methods/channels.setPurpose
 */
class ChannelsSetPurposePayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $purpose;

    /**
     * @param string $channelId ID of the channel to remove user from
     *
     * @return ChannelsSetPurposePayload
     */
    public function setChannelId($channelId)
    {
        $this->channel = $channelId;

        return $this;
    }

    /**
     * @return string ID of the channel to remove user from
     */
    public function getChannelId()
    {
        return $this->channel;
    }

    /**
     * @param string $purpose
     *
     * @return ChannelsSetPurposePayload
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'channels.setPurpose';
    }
}
