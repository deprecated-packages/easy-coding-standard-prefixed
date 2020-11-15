<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Provider;

final class CurrentFilePathProvider
{
    /**
     * @var string|null
     */
    private $filePath;
    public function setFilePath(string $yamlFilePath) : void
    {
        $this->filePath = $yamlFilePath;
    }
    public function getFilePath() : ?string
    {
        return $this->filePath;
    }
}
