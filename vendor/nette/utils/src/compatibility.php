<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopera909b9d9be2e\Nette\Utils;

use _PhpScopera909b9d9be2e\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScopera909b9d9be2e\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopera909b9d9be2e\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScopera909b9d9be2e\Nette\HtmlStringable::class, \_PhpScopera909b9d9be2e\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopera909b9d9be2e\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopera909b9d9be2e\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopera909b9d9be2e\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopera909b9d9be2e\Nette\Localization\Translator::class, \_PhpScopera909b9d9be2e\Nette\Localization\ITranslator::class);
}
