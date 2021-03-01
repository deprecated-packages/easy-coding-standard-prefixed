<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\Nette\Utils;

if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString
    {
    }
} elseif (!\interface_exists(\_PhpScoperc4ea0f0bd23f\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperc4ea0f0bd23f\Nette\HtmlStringable::class, \_PhpScoperc4ea0f0bd23f\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperc4ea0f0bd23f\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator
    {
    }
} elseif (!\interface_exists(\_PhpScoperc4ea0f0bd23f\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperc4ea0f0bd23f\Nette\Localization\Translator::class, \_PhpScoperc4ea0f0bd23f\Nette\Localization\ITranslator::class);
}
