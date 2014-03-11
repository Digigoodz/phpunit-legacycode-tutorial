<?php
/**
 * Basic bootstrap file for PHPUnit
 *
 * @author Frank Lucht
 * @since 13.02.2014
 * @license For the full copyright and license information, please view the LICENSE file that was distributed with
 * this source code.
 */
error_reporting(E_ALL | E_STRICT);

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

include __DIR__ . '/../vendor/autoload.php';