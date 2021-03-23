<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper08686b2277af\Nette\Utils;

use _PhpScoper08686b2277af\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper08686b2277af\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper08686b2277af\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper08686b2277af\Nette\HtmlStringable::class, \_PhpScoper08686b2277af\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper08686b2277af\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper08686b2277af\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper08686b2277af\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper08686b2277af\Nette\Localization\Translator::class, \_PhpScoper08686b2277af\Nette\Localization\ITranslator::class);
}
