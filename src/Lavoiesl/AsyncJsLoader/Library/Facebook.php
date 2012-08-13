<?php

namespace Lavoiesl\AsyncJsLoader\Library;

/**
 * Remember to add <div id="fb-root"></div> in the body
 * @link https://developers.facebook.com/docs/reference/plugins/like/
 */
class Facebook extends Base
{
    protected $id = 'facebook-jssdk';
    protected $locale = 'en_US';
    protected $xfbml = true;

    public function getSrc()
    {
        $src = "//connect.facebook.net/{$this->locale}/all.js";
        if ($this->xfbml) {
            $src .= '#xfbml=1';
        }

        return $src;
    }
}
