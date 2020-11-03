<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Compiler\ValueObjectFactory;

use _PhpScoper2b44cb0c30af\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper2b44cb0c30af\PharIo\Version\Version
    {
        return new \_PhpScoper2b44cb0c30af\PharIo\Version\Version($version);
    }
}
