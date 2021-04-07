<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Input;

use _PhpScoper6a8174766bf7\Symfony\Component\Console\Input\ArgvInput;
final class StaticInputDetector
{
    public static function isDebug() : bool
    {
        $argvInput = new \_PhpScoper6a8174766bf7\Symfony\Component\Console\Input\ArgvInput();
        return $argvInput->hasParameterOption(['--debug', '-v', '-vv', '-vvv']);
    }
}
