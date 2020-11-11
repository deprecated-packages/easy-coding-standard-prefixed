<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\Contract;

interface YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void;
    public function getYamlContent() : string;
}
