<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Component\HttpKernel;

use _PhpScoperb383f16e851e\Symfony\Component\HttpFoundation\Request;
use _PhpScoperb383f16e851e\Symfony\Component\HttpFoundation\Response;
/**
 * Client simulates a browser and makes requests to an HttpKernel instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @method Request  getRequest()  A Request instance
 * @method Response getResponse() A Response instance
 */
class HttpKernelBrowser extends \_PhpScoperb383f16e851e\Symfony\Component\HttpKernel\Client
{
}