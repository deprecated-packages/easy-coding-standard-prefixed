<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper57c79939064b\Nette\Utils;

use _PhpScoper57c79939064b\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper57c79939064b\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper57c79939064b\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper57c79939064b\Nette\HtmlStringable::class, \_PhpScoper57c79939064b\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper57c79939064b\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper57c79939064b\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper57c79939064b\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper57c79939064b\Nette\Localization\Translator::class, \_PhpScoper57c79939064b\Nette\Localization\ITranslator::class);
}
