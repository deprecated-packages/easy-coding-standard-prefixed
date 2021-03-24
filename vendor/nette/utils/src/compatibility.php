<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopere66f4b626446\Nette\Utils;

use _PhpScopere66f4b626446\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScopere66f4b626446\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopere66f4b626446\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScopere66f4b626446\Nette\HtmlStringable::class, \_PhpScopere66f4b626446\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopere66f4b626446\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopere66f4b626446\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopere66f4b626446\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopere66f4b626446\Nette\Localization\Translator::class, \_PhpScopere66f4b626446\Nette\Localization\ITranslator::class);
}
