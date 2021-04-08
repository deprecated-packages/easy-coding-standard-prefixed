<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper9a024705919c\Nette\Utils;

use _PhpScoper9a024705919c\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper9a024705919c\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper9a024705919c\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper9a024705919c\Nette\HtmlStringable::class, \_PhpScoper9a024705919c\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper9a024705919c\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper9a024705919c\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper9a024705919c\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper9a024705919c\Nette\Localization\Translator::class, \_PhpScoper9a024705919c\Nette\Localization\ITranslator::class);
}
