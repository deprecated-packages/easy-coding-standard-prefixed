<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract;

interface YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void;
    public function getYamlContent() : string;
}
