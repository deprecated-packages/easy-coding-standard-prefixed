<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperf523baae4f87\Nette\Utils;

use _PhpScoperf523baae4f87\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperf523baae4f87\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperf523baae4f87\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperf523baae4f87\Nette\HtmlStringable::class, \_PhpScoperf523baae4f87\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperf523baae4f87\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperf523baae4f87\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperf523baae4f87\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperf523baae4f87\Nette\Localization\Translator::class, \_PhpScoperf523baae4f87\Nette\Localization\ITranslator::class);
}
