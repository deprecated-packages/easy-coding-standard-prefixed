<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperd8b0b9452568\Nette\Utils;

use _PhpScoperd8b0b9452568\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperd8b0b9452568\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperd8b0b9452568\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperd8b0b9452568\Nette\HtmlStringable::class, \_PhpScoperd8b0b9452568\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperd8b0b9452568\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperd8b0b9452568\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperd8b0b9452568\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperd8b0b9452568\Nette\Localization\Translator::class, \_PhpScoperd8b0b9452568\Nette\Localization\ITranslator::class);
}
