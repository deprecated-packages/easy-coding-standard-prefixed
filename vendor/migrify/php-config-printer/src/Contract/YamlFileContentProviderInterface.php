<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract;

interface YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void;
    public function getYamlContent() : string;
}
