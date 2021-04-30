<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopera658fe86acec\Nette\Utils;

use _PhpScopera658fe86acec\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopera658fe86acec\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScopera658fe86acec\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopera658fe86acec\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopera658fe86acec\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopera658fe86acec\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopera658fe86acec\Nette\Localization\Translator::class, \_PhpScopera658fe86acec\Nette\Localization\ITranslator::class);
}
