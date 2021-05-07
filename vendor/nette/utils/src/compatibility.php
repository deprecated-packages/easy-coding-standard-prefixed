<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea\Nette\Utils;

use _PhpScopercae9e6ab5cea\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopercae9e6ab5cea\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScopercae9e6ab5cea\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopercae9e6ab5cea\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopercae9e6ab5cea\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopercae9e6ab5cea\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopercae9e6ab5cea\Nette\Localization\Translator::class, \_PhpScopercae9e6ab5cea\Nette\Localization\ITranslator::class);
}
