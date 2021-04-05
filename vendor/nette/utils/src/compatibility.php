<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperf6b7f9bf122d\Nette\Utils;

use _PhpScoperf6b7f9bf122d\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperf6b7f9bf122d\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperf6b7f9bf122d\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperf6b7f9bf122d\Nette\HtmlStringable::class, \_PhpScoperf6b7f9bf122d\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperf6b7f9bf122d\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperf6b7f9bf122d\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperf6b7f9bf122d\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperf6b7f9bf122d\Nette\Localization\Translator::class, \_PhpScoperf6b7f9bf122d\Nette\Localization\ITranslator::class);
}
