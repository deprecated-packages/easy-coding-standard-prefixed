<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Input;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\Console\Input\ArgvInput;
final class StaticInputDetector
{
    public static function isDebug() : bool
    {
        $argvInput = new \_PhpScoperc4ea0f0bd23f\Symfony\Component\Console\Input\ArgvInput();
        return $argvInput->hasParameterOption(['--debug', '-v', '-vv', '-vvv']);
    }
}
