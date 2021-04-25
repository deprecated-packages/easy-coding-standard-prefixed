<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper5686a261d89c\Nette\Utils;

use _PhpScoper5686a261d89c\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper5686a261d89c\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoper5686a261d89c\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper5686a261d89c\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper5686a261d89c\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper5686a261d89c\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper5686a261d89c\Nette\Localization\Translator::class, \_PhpScoper5686a261d89c\Nette\Localization\ITranslator::class);
}
