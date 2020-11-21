<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Dummy;

use _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
