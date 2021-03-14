<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\Nette\Utils;

use _PhpScoperfb0714773dc5\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperfb0714773dc5\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperfb0714773dc5\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperfb0714773dc5\Nette\HtmlStringable::class, \_PhpScoperfb0714773dc5\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperfb0714773dc5\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperfb0714773dc5\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperfb0714773dc5\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperfb0714773dc5\Nette\Localization\Translator::class, \_PhpScoperfb0714773dc5\Nette\Localization\ITranslator::class);
}
