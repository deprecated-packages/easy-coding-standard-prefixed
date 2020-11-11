<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
