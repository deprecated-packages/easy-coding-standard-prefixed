<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper1ed8518cf1bf\Nette\Utils;

use _PhpScoper1ed8518cf1bf\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper1ed8518cf1bf\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper1ed8518cf1bf\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper1ed8518cf1bf\Nette\HtmlStringable::class, \_PhpScoper1ed8518cf1bf\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper1ed8518cf1bf\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper1ed8518cf1bf\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper1ed8518cf1bf\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper1ed8518cf1bf\Nette\Localization\Translator::class, \_PhpScoper1ed8518cf1bf\Nette\Localization\ITranslator::class);
}
