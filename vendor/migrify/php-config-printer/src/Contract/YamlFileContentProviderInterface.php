<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\Contract;

interface YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void;
    public function getYamlContent() : string;
}
