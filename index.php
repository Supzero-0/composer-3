<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$marguerite = new Cow('Hello you !');
$marguerite->setEyes('oO')
    ->setTongue('U')
    ->setUdder('W');
echo $marguerite;
