<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Compiler\ValueObjectFactory;

use _PhpScoper3d04c8135695\PharIo\Version\Version;
final class VersionFactory
{
    public function create(string $version) : \_PhpScoper3d04c8135695\PharIo\Version\Version
    {
        return new \_PhpScoper3d04c8135695\PharIo\Version\Version($version);
    }
}
