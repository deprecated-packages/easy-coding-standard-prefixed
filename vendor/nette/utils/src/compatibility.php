<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopercfeba9d8ad31\Nette\Utils;

use _PhpScopercfeba9d8ad31\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopercfeba9d8ad31\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScopercfeba9d8ad31\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopercfeba9d8ad31\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopercfeba9d8ad31\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopercfeba9d8ad31\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopercfeba9d8ad31\Nette\Localization\Translator::class, \_PhpScopercfeba9d8ad31\Nette\Localization\ITranslator::class);
}
