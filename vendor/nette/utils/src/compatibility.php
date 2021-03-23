<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper8ca6426d4e0c\Nette\Utils;

use _PhpScoper8ca6426d4e0c\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper8ca6426d4e0c\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper8ca6426d4e0c\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper8ca6426d4e0c\Nette\HtmlStringable::class, \_PhpScoper8ca6426d4e0c\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper8ca6426d4e0c\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper8ca6426d4e0c\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper8ca6426d4e0c\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper8ca6426d4e0c\Nette\Localization\Translator::class, \_PhpScoper8ca6426d4e0c\Nette\Localization\ITranslator::class);
}
