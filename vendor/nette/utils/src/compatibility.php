<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper3c44535fe75f\Nette\Utils;

use _PhpScoper3c44535fe75f\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper3c44535fe75f\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoper3c44535fe75f\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper3c44535fe75f\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper3c44535fe75f\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper3c44535fe75f\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper3c44535fe75f\Nette\Localization\Translator::class, \_PhpScoper3c44535fe75f\Nette\Localization\ITranslator::class);
}
