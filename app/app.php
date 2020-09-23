<?php

require_once('..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

$manufacturer = new \StaticCodeAnalysis\Manufacturer();

echo('Manufacturer instance identifier: ' . $manufacturer->getIdentifier());
