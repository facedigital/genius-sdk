<?php

include 'vendor/autoload.php';

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

$options = GeneratorOptions::instance(/* '/path/file.yml' */);
$options
    ->setOrigin('https://trevisansandbox.geniussis.com/publicapi.asmx?WSDL')
    ->setDestination('./build/')
    ->setComposerName('facedigital/genius-sdk');

$generator = new Generator($options);

$generator->generatePackage();
