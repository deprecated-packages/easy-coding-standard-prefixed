<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperc7096eb2567d\Nette\Utils;

use _PhpScoperc7096eb2567d\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperc7096eb2567d\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperc7096eb2567d\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperc7096eb2567d\Nette\HtmlStringable::class, \_PhpScoperc7096eb2567d\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperc7096eb2567d\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperc7096eb2567d\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperc7096eb2567d\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperc7096eb2567d\Nette\Localization\Translator::class, \_PhpScoperc7096eb2567d\Nette\Localization\ITranslator::class);
}
