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
 */
class ImOpenPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var bool
     */
    private $noOp;

    /**
     * @var bool
     */
    private $alreadyOpen;

    /**
     * @var array
     */
    private $channel;

    /**
     * @return bool
     */
    public function isAlreadyOpen()
    {
        return $this->alreadyOpen;
    }

    /**
     * @return bool
     */
    public function isNoOp()
    {
        return $this->noOp;
    }

    /**
     * @return array
     */
    public function getChannel()
    {
        return $this->channel;  
    }
}
