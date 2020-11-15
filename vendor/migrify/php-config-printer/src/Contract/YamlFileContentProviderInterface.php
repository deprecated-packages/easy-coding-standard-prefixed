<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract;

interface YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void;
    public function getYamlContent() : string;
}
