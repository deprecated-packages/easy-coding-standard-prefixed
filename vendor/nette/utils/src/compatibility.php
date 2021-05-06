<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopere7e518ee6a5b\Nette\Utils;

use _PhpScopere7e518ee6a5b\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopere7e518ee6a5b\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScopere7e518ee6a5b\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopere7e518ee6a5b\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopere7e518ee6a5b\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopere7e518ee6a5b\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopere7e518ee6a5b\Nette\Localization\Translator::class, \_PhpScopere7e518ee6a5b\Nette\Localization\ITranslator::class);
}
