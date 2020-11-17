<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
