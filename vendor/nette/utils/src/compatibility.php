<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper842c7347e6be\Nette\Utils;

use _PhpScoper842c7347e6be\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper842c7347e6be\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper842c7347e6be\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper842c7347e6be\Nette\HtmlStringable::class, \_PhpScoper842c7347e6be\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper842c7347e6be\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper842c7347e6be\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper842c7347e6be\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper842c7347e6be\Nette\Localization\Translator::class, \_PhpScoper842c7347e6be\Nette\Localization\ITranslator::class);
}
