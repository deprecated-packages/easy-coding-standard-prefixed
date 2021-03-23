<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper5e93f39f19fe\Nette\Utils;

use _PhpScoper5e93f39f19fe\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper5e93f39f19fe\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper5e93f39f19fe\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper5e93f39f19fe\Nette\HtmlStringable::class, \_PhpScoper5e93f39f19fe\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper5e93f39f19fe\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper5e93f39f19fe\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper5e93f39f19fe\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper5e93f39f19fe\Nette\Localization\Translator::class, \_PhpScoper5e93f39f19fe\Nette\Localization\ITranslator::class);
}
