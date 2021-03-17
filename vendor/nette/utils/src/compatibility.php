<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper246d3630afdd\Nette\Utils;

use _PhpScoper246d3630afdd\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper246d3630afdd\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper246d3630afdd\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper246d3630afdd\Nette\HtmlStringable::class, \_PhpScoper246d3630afdd\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper246d3630afdd\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper246d3630afdd\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper246d3630afdd\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper246d3630afdd\Nette\Localization\Translator::class, \_PhpScoper246d3630afdd\Nette\Localization\ITranslator::class);
}
