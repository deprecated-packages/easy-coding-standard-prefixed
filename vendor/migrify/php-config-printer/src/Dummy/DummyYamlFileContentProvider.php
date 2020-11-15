<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Dummy;

use _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
