<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Dummy;

use _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface;
final class DummyYamlFileContentProvider implements \_PhpScopercda2b863d098\Migrify\PhpConfigPrinter\Contract\YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void
    {
    }
    public function getYamlContent() : string
    {
        return '';
    }
}
