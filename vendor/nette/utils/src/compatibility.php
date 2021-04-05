<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper457dd3bd73ba\Nette\Utils;

use _PhpScoper457dd3bd73ba\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper457dd3bd73ba\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper457dd3bd73ba\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper457dd3bd73ba\Nette\HtmlStringable::class, \_PhpScoper457dd3bd73ba\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper457dd3bd73ba\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper457dd3bd73ba\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper457dd3bd73ba\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper457dd3bd73ba\Nette\Localization\Translator::class, \_PhpScoper457dd3bd73ba\Nette\Localization\ITranslator::class);
}
