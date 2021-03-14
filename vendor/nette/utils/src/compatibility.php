<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopera1f11cc38772\Nette\Utils;

use _PhpScopera1f11cc38772\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScopera1f11cc38772\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopera1f11cc38772\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScopera1f11cc38772\Nette\HtmlStringable::class, \_PhpScopera1f11cc38772\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopera1f11cc38772\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopera1f11cc38772\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopera1f11cc38772\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopera1f11cc38772\Nette\Localization\Translator::class, \_PhpScopera1f11cc38772\Nette\Localization\ITranslator::class);
}
