<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Component\ErrorHandler;

/**
 * Registers all the debug tools.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Debug
{
    public static function enable() : \_PhpScoperb383f16e851e\Symfony\Component\ErrorHandler\ErrorHandler
    {
        \error_reporting(-1);
        if (!\in_array(\PHP_SAPI, ['cli', 'phpdbg'], \true)) {
            \ini_set('display_errors', 0);
        } elseif (!\filter_var(\ini_get('log_errors'), \FILTER_VALIDATE_BOOLEAN) || \ini_get('error_log')) {
            // CLI - display errors only if they're not already logged to STDERR
            \ini_set('display_errors', 1);
        }
        \_PhpScoperb383f16e851e\Symfony\Component\ErrorHandler\DebugClassLoader::enable();
        return \_PhpScoperb383f16e851e\Symfony\Component\ErrorHandler\ErrorHandler::register(new \_PhpScoperb383f16e851e\Symfony\Component\ErrorHandler\ErrorHandler(new \_PhpScoperb383f16e851e\Symfony\Component\ErrorHandler\BufferingLogger()));
    }
}