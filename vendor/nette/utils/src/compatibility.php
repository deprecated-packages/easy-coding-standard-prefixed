<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper000f93dc572d\Nette\Utils;

use _PhpScoper000f93dc572d\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper000f93dc572d\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoper000f93dc572d\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper000f93dc572d\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper000f93dc572d\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper000f93dc572d\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper000f93dc572d\Nette\Localization\Translator::class, \_PhpScoper000f93dc572d\Nette\Localization\ITranslator::class);
}
