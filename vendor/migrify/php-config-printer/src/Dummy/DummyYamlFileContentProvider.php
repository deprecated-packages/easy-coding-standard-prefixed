<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
