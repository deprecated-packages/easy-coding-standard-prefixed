<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper27cac5a8b4ab\Nette\Utils;

use _PhpScoper27cac5a8b4ab\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper27cac5a8b4ab\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoper27cac5a8b4ab\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper27cac5a8b4ab\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper27cac5a8b4ab\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper27cac5a8b4ab\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper27cac5a8b4ab\Nette\Localization\Translator::class, \_PhpScoper27cac5a8b4ab\Nette\Localization\ITranslator::class);
}
