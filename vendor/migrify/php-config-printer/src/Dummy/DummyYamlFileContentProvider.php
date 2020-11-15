<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
