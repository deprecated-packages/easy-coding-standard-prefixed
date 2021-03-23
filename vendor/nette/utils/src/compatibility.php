<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper488221d5cc83\Nette\Utils;

use _PhpScoper488221d5cc83\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper488221d5cc83\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper488221d5cc83\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper488221d5cc83\Nette\HtmlStringable::class, \_PhpScoper488221d5cc83\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper488221d5cc83\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper488221d5cc83\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper488221d5cc83\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper488221d5cc83\Nette\Localization\Translator::class, \_PhpScoper488221d5cc83\Nette\Localization\ITranslator::class);
}
