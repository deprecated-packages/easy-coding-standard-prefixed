<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopera9d6a31d814c\Nette\Utils;

use _PhpScopera9d6a31d814c\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopera9d6a31d814c\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScopera9d6a31d814c\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopera9d6a31d814c\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopera9d6a31d814c\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopera9d6a31d814c\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopera9d6a31d814c\Nette\Localization\Translator::class, \_PhpScopera9d6a31d814c\Nette\Localization\ITranslator::class);
}
