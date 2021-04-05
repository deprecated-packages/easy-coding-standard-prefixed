<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperf5c57eca8aae\Nette\Utils;

use _PhpScoperf5c57eca8aae\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperf5c57eca8aae\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperf5c57eca8aae\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperf5c57eca8aae\Nette\HtmlStringable::class, \_PhpScoperf5c57eca8aae\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperf5c57eca8aae\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperf5c57eca8aae\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperf5c57eca8aae\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperf5c57eca8aae\Nette\Localization\Translator::class, \_PhpScoperf5c57eca8aae\Nette\Localization\ITranslator::class);
}
