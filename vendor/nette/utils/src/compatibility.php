<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper255a4eaff575\Nette\Utils;

use _PhpScoper255a4eaff575\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper255a4eaff575\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper255a4eaff575\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper255a4eaff575\Nette\HtmlStringable::class, \_PhpScoper255a4eaff575\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper255a4eaff575\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper255a4eaff575\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper255a4eaff575\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper255a4eaff575\Nette\Localization\Translator::class, \_PhpScoper255a4eaff575\Nette\Localization\ITranslator::class);
}
