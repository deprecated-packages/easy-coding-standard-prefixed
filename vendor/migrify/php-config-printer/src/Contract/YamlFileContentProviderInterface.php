<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract;

interface YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void;
    public function getYamlContent() : string;
}
