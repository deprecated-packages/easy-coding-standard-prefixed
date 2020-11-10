<?php

declare (strict_types=1);
namespace Symplify\RuleDocGenerator\Neon;

use _PhpScoper666af036e800\Nette\Neon\Encoder;
use _PhpScoper666af036e800\Nette\Neon\Neon;
use _PhpScoper666af036e800\Nette\Utils\Strings;
final class NeonPrinter
{
    /**
     * @see https://regex101.com/r/r8DGyV/1
     * @var string
     */
    private const TAGS_REGEX = '#tags:\\s+\\-\\s+(?<tag>.*?)$#ms';
    /**
     * @see https://regex101.com/r/KjekIe/1
     * @var string
     */
    private const ARGUMENTS_DOUBLE_SPACE_REGEX = '#\\n(\\n\\s+arguments:)#ms';
    /**
     * @param mixed[] $neon
     */
    public function print(array $neon) : string
    {
        $neonContent = \_PhpScoper666af036e800\Nette\Neon\Neon::encode($neon, \_PhpScoper666af036e800\Nette\Neon\Encoder::BLOCK);
        // inline single tags, dummy
        $neonContent = \_PhpScoper666af036e800\Nette\Utils\Strings::replace($neonContent, self::TAGS_REGEX, 'tags: [$1]');
        // fix double space in arguments
        $neonContent = \_PhpScoper666af036e800\Nette\Utils\Strings::replace($neonContent, self::ARGUMENTS_DOUBLE_SPACE_REGEX, '$1');
        return \_PhpScoper666af036e800\Nette\Utils\Strings::replace($neonContent, '#\\t#', '    ');
    }
}
