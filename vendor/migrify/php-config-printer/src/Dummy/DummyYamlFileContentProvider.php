<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\Migrify\PhpConfigPrinter\Dummy;

use _PhpScoper63567e560066\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScoper63567e560066\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
