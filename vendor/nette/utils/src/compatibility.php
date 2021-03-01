<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\Nette\Utils;

if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString
    {
    }
} elseif (!\interface_exists(\_PhpScoper06c5fb6c14ed\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper06c5fb6c14ed\Nette\HtmlStringable::class, \_PhpScoper06c5fb6c14ed\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper06c5fb6c14ed\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator
    {
    }
} elseif (!\interface_exists(\_PhpScoper06c5fb6c14ed\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper06c5fb6c14ed\Nette\Localization\Translator::class, \_PhpScoper06c5fb6c14ed\Nette\Localization\ITranslator::class);
}
