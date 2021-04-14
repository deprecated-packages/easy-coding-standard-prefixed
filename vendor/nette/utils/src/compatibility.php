<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopercc9aec205203\Nette\Utils;

use _PhpScopercc9aec205203\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScopercc9aec205203\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopercc9aec205203\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScopercc9aec205203\Nette\HtmlStringable::class, \_PhpScopercc9aec205203\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopercc9aec205203\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopercc9aec205203\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopercc9aec205203\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopercc9aec205203\Nette\Localization\Translator::class, \_PhpScopercc9aec205203\Nette\Localization\ITranslator::class);
}
