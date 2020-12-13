<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Input;

use _PhpScoper4298f97f3cb3\Symfony\Component\Console\Input\ArgvInput;
class StaticInputDetector
{
    public static function isDebug() : bool
    {
        $argvInput = new \_PhpScoper4298f97f3cb3\Symfony\Component\Console\Input\ArgvInput();
        return $argvInput->hasParameterOption(['--debug', '-v', '-vv', '-vvv']);
    }
}
