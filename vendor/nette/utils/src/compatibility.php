<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper971ef29294dd\Nette\Utils;

use _PhpScoper971ef29294dd\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper971ef29294dd\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper971ef29294dd\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper971ef29294dd\Nette\HtmlStringable::class, \_PhpScoper971ef29294dd\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper971ef29294dd\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper971ef29294dd\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper971ef29294dd\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper971ef29294dd\Nette\Localization\Translator::class, \_PhpScoper971ef29294dd\Nette\Localization\ITranslator::class);
}
