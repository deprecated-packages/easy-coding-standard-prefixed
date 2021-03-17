<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopera3425146d487\Nette\Utils;

use _PhpScopera3425146d487\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScopera3425146d487\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopera3425146d487\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScopera3425146d487\Nette\HtmlStringable::class, \_PhpScopera3425146d487\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopera3425146d487\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopera3425146d487\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopera3425146d487\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopera3425146d487\Nette\Localization\Translator::class, \_PhpScopera3425146d487\Nette\Localization\ITranslator::class);
}
