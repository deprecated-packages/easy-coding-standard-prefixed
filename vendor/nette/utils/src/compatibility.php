<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperff1e514762b4\Nette\Utils;

use _PhpScoperff1e514762b4\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperff1e514762b4\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoperff1e514762b4\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperff1e514762b4\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperff1e514762b4\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperff1e514762b4\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperff1e514762b4\Nette\Localization\Translator::class, \_PhpScoperff1e514762b4\Nette\Localization\ITranslator::class);
}
