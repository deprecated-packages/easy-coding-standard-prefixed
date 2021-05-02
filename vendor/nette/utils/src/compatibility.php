<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperb5b1090524db\Nette\Utils;

use _PhpScoperb5b1090524db\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperb5b1090524db\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoperb5b1090524db\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperb5b1090524db\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperb5b1090524db\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperb5b1090524db\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperb5b1090524db\Nette\Localization\Translator::class, \_PhpScoperb5b1090524db\Nette\Localization\ITranslator::class);
}
