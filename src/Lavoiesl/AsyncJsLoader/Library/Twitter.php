<?php

namespace Lavoiesl\AsyncJsLoader\Library;

/**
 * @link https://dev.twitter.com/docs/tweet-button
 */
class Twitter extends Base
{
    protected $id = 'twitter-wjs';

    public function getSrc()
    {
        return "//platform.twitter.com/widgets.js";
    }
}