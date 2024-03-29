#!/usr/bin/env php
<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

define('BEHAT_PHP_BIN_PATH', getenv('PHP_PEAR_PHP_BIN') ?: '/usr/bin/env php');
define('BEHAT_BIN_PATH',     __FILE__);
define('BEHAT_VERSION',      'DEV');

require(__DIR__.'/vendor/autoload.php');

//if (is_dir($vendor = __DIR__.'/../vendor')) {
//    require($vendor.'/autoload.php');
//} elseif (is_dir($vendor = __DIR__.'/../../../../vendor')) {
//    require($vendor.'/autoload.php');
//} else {
//    die(
//        'You must set up the project dependencies, run the following commands:'.PHP_EOL.
//            'curl -s http://getcomposer.org/installer | php'.PHP_EOL.
//            'php composer.phar install'.PHP_EOL
//    );
//}

$app = new Behat\Behat\Console\BehatApplication(BEHAT_VERSION);
$app->run();