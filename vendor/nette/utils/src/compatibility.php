<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopera609aff833be\Nette\Utils;

use _PhpScopera609aff833be\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScopera609aff833be\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopera609aff833be\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScopera609aff833be\Nette\HtmlStringable::class, \_PhpScopera609aff833be\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopera609aff833be\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopera609aff833be\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopera609aff833be\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopera609aff833be\Nette\Localization\Translator::class, \_PhpScopera609aff833be\Nette\Localization\ITranslator::class);
}
