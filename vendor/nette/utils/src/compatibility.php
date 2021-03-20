<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperb0c6500a504c\Nette\Utils;

use _PhpScoperb0c6500a504c\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperb0c6500a504c\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperb0c6500a504c\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperb0c6500a504c\Nette\HtmlStringable::class, \_PhpScoperb0c6500a504c\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperb0c6500a504c\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperb0c6500a504c\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperb0c6500a504c\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperb0c6500a504c\Nette\Localization\Translator::class, \_PhpScoperb0c6500a504c\Nette\Localization\ITranslator::class);
}
