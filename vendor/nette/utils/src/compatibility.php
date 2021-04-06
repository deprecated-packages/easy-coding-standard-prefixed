<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperb6361033cf41\Nette\Utils;

use _PhpScoperb6361033cf41\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperb6361033cf41\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperb6361033cf41\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperb6361033cf41\Nette\HtmlStringable::class, \_PhpScoperb6361033cf41\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperb6361033cf41\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperb6361033cf41\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperb6361033cf41\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperb6361033cf41\Nette\Localization\Translator::class, \_PhpScoperb6361033cf41\Nette\Localization\ITranslator::class);
}
