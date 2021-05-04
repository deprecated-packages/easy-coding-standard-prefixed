<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperc7a2896cc805\Nette\Utils;

use _PhpScoperc7a2896cc805\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperc7a2896cc805\Nette\Utils\IHtmlString::class)) {
    \class_alias(Nette\HtmlStringable::class, \_PhpScoperc7a2896cc805\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperc7a2896cc805\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperc7a2896cc805\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperc7a2896cc805\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperc7a2896cc805\Nette\Localization\Translator::class, \_PhpScoperc7a2896cc805\Nette\Localization\ITranslator::class);
}
