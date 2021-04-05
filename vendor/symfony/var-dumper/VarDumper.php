<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper;

use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Request;
use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Debug\FileLinkFormatter;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Caster\ReflectionCaster;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Cloner\VarCloner;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\CliDumper;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextualizedDumper;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\HtmlDumper;
use _PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ServerDumper;
// Load the global dump() function
require_once __DIR__ . '/Resources/functions/dump.php';
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class VarDumper
{
    private static $handler;
    public static function dump($var)
    {
        if (null === self::$handler) {
            self::register();
        }
        return (self::$handler)($var);
    }
    public static function setHandler(callable $callable = null)
    {
        $prevHandler = self::$handler;
        // Prevent replacing the handler with expected format as soon as the env var was set:
        if (isset($_SERVER['VAR_DUMPER_FORMAT'])) {
            return $prevHandler;
        }
        self::$handler = $callable;
        return $prevHandler;
    }
    private static function register() : void
    {
        $cloner = new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Cloner\VarCloner();
        $cloner->addCasters(\_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Caster\ReflectionCaster::UNSET_CLOSURE_FILE_INFO);
        $format = $_SERVER['VAR_DUMPER_FORMAT'] ?? null;
        switch (\true) {
            case 'html' === $format:
                $dumper = new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\HtmlDumper();
                break;
            case 'cli' === $format:
                $dumper = new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\CliDumper();
                break;
            case 'server' === $format:
            case 'tcp' === \parse_url($format, \PHP_URL_SCHEME):
                $host = 'server' === $format ? $_SERVER['VAR_DUMPER_SERVER'] ?? '127.0.0.1:9912' : $format;
                $dumper = \in_array(\PHP_SAPI, ['cli', 'phpdbg'], \true) ? new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\CliDumper() : new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\HtmlDumper();
                $dumper = new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ServerDumper($host, $dumper, self::getDefaultContextProviders());
                break;
            default:
                $dumper = \in_array(\PHP_SAPI, ['cli', 'phpdbg'], \true) ? new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\CliDumper() : new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\HtmlDumper();
        }
        if (!$dumper instanceof \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ServerDumper) {
            $dumper = new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextualizedDumper($dumper, [new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider()]);
        }
        self::$handler = function ($var) use($cloner, $dumper) {
            $dumper->dump($cloner->cloneVar($var));
        };
    }
    private static function getDefaultContextProviders() : array
    {
        $contextProviders = [];
        if (!\in_array(\PHP_SAPI, ['cli', 'phpdbg'], \true) && \class_exists(\_PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Request::class)) {
            $requestStack = new \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\RequestStack();
            $requestStack->push(\_PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Request::createFromGlobals());
            $contextProviders['request'] = new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider($requestStack);
        }
        $fileLinkFormatter = \class_exists(\_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Debug\FileLinkFormatter::class) ? new \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Debug\FileLinkFormatter(null, $requestStack ?? null) : null;
        return $contextProviders + ['cli' => new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider(), 'source' => new \_PhpScopercd2fc5ef50ef\Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider(null, null, $fileLinkFormatter)];
    }
}
