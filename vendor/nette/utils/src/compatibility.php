<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopera46128941588\Nette\Utils;

use _PhpScopera46128941588\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopera46128941588\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScopera46128941588\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopera46128941588\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopera46128941588\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopera46128941588\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopera46128941588\Nette\Localization\Translator::class, \_PhpScopera46128941588\Nette\Localization\ITranslator::class);
}
