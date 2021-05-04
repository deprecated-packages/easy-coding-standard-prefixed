<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper653866602a9e\Nette\Utils;

use _PhpScoper653866602a9e\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper653866602a9e\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoper653866602a9e\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper653866602a9e\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper653866602a9e\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper653866602a9e\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper653866602a9e\Nette\Localization\Translator::class, \_PhpScoper653866602a9e\Nette\Localization\ITranslator::class);
}
