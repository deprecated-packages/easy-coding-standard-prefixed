<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac\Nette\Utils;

use _PhpScoper0c0702cca4ac\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper0c0702cca4ac\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper0c0702cca4ac\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper0c0702cca4ac\Nette\HtmlStringable::class, \_PhpScoper0c0702cca4ac\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper0c0702cca4ac\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper0c0702cca4ac\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper0c0702cca4ac\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper0c0702cca4ac\Nette\Localization\Translator::class, \_PhpScoper0c0702cca4ac\Nette\Localization\ITranslator::class);
}
