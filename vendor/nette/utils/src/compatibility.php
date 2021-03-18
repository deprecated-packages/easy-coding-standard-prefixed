<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperf53473b45c36\Nette\Utils;

use _PhpScoperf53473b45c36\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperf53473b45c36\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperf53473b45c36\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperf53473b45c36\Nette\HtmlStringable::class, \_PhpScoperf53473b45c36\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperf53473b45c36\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperf53473b45c36\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperf53473b45c36\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperf53473b45c36\Nette\Localization\Translator::class, \_PhpScoperf53473b45c36\Nette\Localization\ITranslator::class);
}
