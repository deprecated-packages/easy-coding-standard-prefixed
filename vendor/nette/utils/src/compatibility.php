<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperd47a2fa2a77e\Nette\Utils;

use _PhpScoperd47a2fa2a77e\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperd47a2fa2a77e\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperd47a2fa2a77e\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperd47a2fa2a77e\Nette\HtmlStringable::class, \_PhpScoperd47a2fa2a77e\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperd47a2fa2a77e\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperd47a2fa2a77e\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperd47a2fa2a77e\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperd47a2fa2a77e\Nette\Localization\Translator::class, \_PhpScoperd47a2fa2a77e\Nette\Localization\ITranslator::class);
}
