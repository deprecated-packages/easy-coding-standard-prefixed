<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper8cb97064581a\Nette\Utils;

use _PhpScoper8cb97064581a\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper8cb97064581a\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper8cb97064581a\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper8cb97064581a\Nette\HtmlStringable::class, \_PhpScoper8cb97064581a\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper8cb97064581a\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper8cb97064581a\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper8cb97064581a\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper8cb97064581a\Nette\Localization\Translator::class, \_PhpScoper8cb97064581a\Nette\Localization\ITranslator::class);
}
