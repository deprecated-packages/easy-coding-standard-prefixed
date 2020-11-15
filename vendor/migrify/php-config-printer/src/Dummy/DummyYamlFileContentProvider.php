<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
