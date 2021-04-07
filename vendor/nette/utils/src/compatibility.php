<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper6a8174766bf7\Nette\Utils;

use _PhpScoper6a8174766bf7\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper6a8174766bf7\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper6a8174766bf7\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper6a8174766bf7\Nette\HtmlStringable::class, \_PhpScoper6a8174766bf7\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper6a8174766bf7\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper6a8174766bf7\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper6a8174766bf7\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper6a8174766bf7\Nette\Localization\Translator::class, \_PhpScoper6a8174766bf7\Nette\Localization\ITranslator::class);
}
