<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperef2f7aa3581e\Nette\Utils;

use _PhpScoperef2f7aa3581e\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperef2f7aa3581e\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoperef2f7aa3581e\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperef2f7aa3581e\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperef2f7aa3581e\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperef2f7aa3581e\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperef2f7aa3581e\Nette\Localization\Translator::class, \_PhpScoperef2f7aa3581e\Nette\Localization\ITranslator::class);
}
