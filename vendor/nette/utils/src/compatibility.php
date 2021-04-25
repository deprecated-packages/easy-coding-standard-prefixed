<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper99c9619a6243\Nette\Utils;

use _PhpScoper99c9619a6243\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper99c9619a6243\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoper99c9619a6243\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper99c9619a6243\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper99c9619a6243\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper99c9619a6243\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper99c9619a6243\Nette\Localization\Translator::class, \_PhpScoper99c9619a6243\Nette\Localization\ITranslator::class);
}
