<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperd232d3743ab9\Nette\Utils;

use _PhpScoperd232d3743ab9\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperd232d3743ab9\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoperd232d3743ab9\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperd232d3743ab9\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperd232d3743ab9\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperd232d3743ab9\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperd232d3743ab9\Nette\Localization\Translator::class, \_PhpScoperd232d3743ab9\Nette\Localization\ITranslator::class);
}
