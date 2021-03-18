<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper0ba97041430d\Nette\Utils;

use _PhpScoper0ba97041430d\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper0ba97041430d\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper0ba97041430d\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper0ba97041430d\Nette\HtmlStringable::class, \_PhpScoper0ba97041430d\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper0ba97041430d\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper0ba97041430d\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper0ba97041430d\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper0ba97041430d\Nette\Localization\Translator::class, \_PhpScoper0ba97041430d\Nette\Localization\ITranslator::class);
}
