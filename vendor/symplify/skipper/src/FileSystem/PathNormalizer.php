<?php

declare (strict_types=1);
namespace Symplify\Skipper\FileSystem;

use _PhpScoperf5f75c22067b\Nette\Utils\Strings;
final class PathNormalizer
{
    /**
     * @var string
     * @see https://regex101.com/r/ZB2dFV/2
     */
    private const ONLY_ENDS_WITH_ASTERISK_REGEX = '#^[^*](.*?)\\*$#';
    /**
     * @var string
     * @see https://regex101.com/r/aVUDjM/2
     */
    private const ONLY_STARTS_WITH_ASTERISK_REGEX = '#^\\*(.*?)[^*]$#';
    /**
     * "value*" → "*value*"
     * "*value" → "*value*"
     */
    public function normalizeForFnmatch(string $path) : string
    {
        // ends with *
        if (\_PhpScoperf5f75c22067b\Nette\Utils\Strings::match($path, self::ONLY_ENDS_WITH_ASTERISK_REGEX)) {
            return '*' . $path;
        }
        // starts with *
        if (\_PhpScoperf5f75c22067b\Nette\Utils\Strings::match($path, self::ONLY_STARTS_WITH_ASTERISK_REGEX)) {
            return $path . '*';
        }
        return $path;
    }
}
