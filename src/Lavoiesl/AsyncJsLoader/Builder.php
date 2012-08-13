<?php

namespace Lavoiesl\AsyncJsLoader;

class Builder
{
    public $delay = 300;
    private $vars = array(
        'd' => 'document',
        's' => "'script'",
    );

    protected function getLoaderJs()
    {
        $file = __DIR__ . '/Resources/loader.js';
        return file_get_contents($file);
    }

    public function wrap(array $libs)
    {
        $js = $this->getLoaderJs();
        foreach ($libs as $lib) {
            if (is_string($lib)) {
                $class = "Lavoiesl\AsyncJsLoader\Library\\$lib";
                $lib = new $class;
            }
            $js .= $lib->getJs();
        }

        $js = trim($js,';');

        $vars = implode(',', array_keys($this->vars));
        $vals = implode(',', array_values($this->vars));

        $js = "!function($vars){{$js}}($vals)";
        return $this->minify($js);
    }

    /**
     * Ultra basic here, all the hard work is already done
     */
    private function minify($js)
    {
        $js = preg_replace('/^ +/m', '', $js);
        $js = str_replace("\n", '', $js);
        return $js;
    }
}