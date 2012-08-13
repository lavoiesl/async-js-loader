<?php
require 'vendor/autoload.php';

use Lavoiesl\AsyncJsLoader\Builder;

$libs = array();
for ($i=1; $i < $argc; $i++) {
    $libs[] = ucfirst($argv[$i]);
}
if (!$libs) {
    file_put_contents('php://stderr', "Usage: build.php twitter facebook [...]\n");
    exit(1);
}

$builder = new Builder;
echo $builder->wrap($libs) . "\n";
