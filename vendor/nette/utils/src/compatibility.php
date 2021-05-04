<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperc2b2a9bb0e13\Nette\Utils;

use _PhpScoperc2b2a9bb0e13\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperc2b2a9bb0e13\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoperc2b2a9bb0e13\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperc2b2a9bb0e13\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperc2b2a9bb0e13\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperc2b2a9bb0e13\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperc2b2a9bb0e13\Nette\Localization\Translator::class, \_PhpScoperc2b2a9bb0e13\Nette\Localization\ITranslator::class);
}
