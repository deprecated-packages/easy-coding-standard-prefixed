<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6\Migrify\PhpConfigPrinter\Contract;

interface YamlFileContentProviderInterface
{
    public function setContent(string $yamlContent) : void;
    public function getYamlContent() : string;
}
