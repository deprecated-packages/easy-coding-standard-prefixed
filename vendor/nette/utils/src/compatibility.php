<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper64e7ad844899\Nette\Utils;

use _PhpScoper64e7ad844899\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper64e7ad844899\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper64e7ad844899\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper64e7ad844899\Nette\HtmlStringable::class, \_PhpScoper64e7ad844899\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper64e7ad844899\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper64e7ad844899\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper64e7ad844899\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper64e7ad844899\Nette\Localization\Translator::class, \_PhpScoper64e7ad844899\Nette\Localization\ITranslator::class);
}
