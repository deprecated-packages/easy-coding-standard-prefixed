<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopereb9508917a55\Nette\Utils;

use _PhpScopereb9508917a55\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopereb9508917a55\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScopereb9508917a55\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopereb9508917a55\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopereb9508917a55\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopereb9508917a55\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopereb9508917a55\Nette\Localization\Translator::class, \_PhpScopereb9508917a55\Nette\Localization\ITranslator::class);
}
