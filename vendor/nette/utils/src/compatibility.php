<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper9385100df341\Nette\Utils;

use _PhpScoper9385100df341\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper9385100df341\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoper9385100df341\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper9385100df341\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper9385100df341\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper9385100df341\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper9385100df341\Nette\Localization\Translator::class, \_PhpScoper9385100df341\Nette\Localization\ITranslator::class);
}
