<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScopercd2fc5ef50ef\Nette\Utils;

use _PhpScopercd2fc5ef50ef\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScopercd2fc5ef50ef\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScopercd2fc5ef50ef\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScopercd2fc5ef50ef\Nette\HtmlStringable::class, \_PhpScopercd2fc5ef50ef\Nette\Utils\IHtmlString::class);
}
namespace _PhpScopercd2fc5ef50ef\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScopercd2fc5ef50ef\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScopercd2fc5ef50ef\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScopercd2fc5ef50ef\Nette\Localization\Translator::class, \_PhpScopercd2fc5ef50ef\Nette\Localization\ITranslator::class);
}
