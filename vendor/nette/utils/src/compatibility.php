<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper70d1796231ae\Nette\Utils;

use _PhpScoper70d1796231ae\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper70d1796231ae\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper70d1796231ae\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper70d1796231ae\Nette\HtmlStringable::class, \_PhpScoper70d1796231ae\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper70d1796231ae\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper70d1796231ae\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper70d1796231ae\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper70d1796231ae\Nette\Localization\Translator::class, \_PhpScoper70d1796231ae\Nette\Localization\ITranslator::class);
}
