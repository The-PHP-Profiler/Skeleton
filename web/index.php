<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This is the main app landing file for all HTTP requests.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2023 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package App\Web
 *
 * @version GIT: $Id$ Blob checksum.
 *
 * @todo Remove ini settings after logger provider is implemented.
 */

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use FireHub\Core\FireHub;
use FireHub\Core\Initializers\Enums\Kernel;

/**
 * Let there be light
 */
require 'phar://'.__DIR__.'/../vendor/firehub/core/phar/core.phar/firehub.FireHub.php';
require 'phar://'.__DIR__.'/../vendor/firehub/core/phar/core.phar/initializers/enums/firehub.Kernel.php';

echo $firehub = FireHub::boot(Kernel::HTTP);