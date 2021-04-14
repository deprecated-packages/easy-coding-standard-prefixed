<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperd32e35cfad84\Nette\Utils;

use _PhpScoperd32e35cfad84\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperd32e35cfad84\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperd32e35cfad84\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperd32e35cfad84\Nette\HtmlStringable::class, \_PhpScoperd32e35cfad84\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperd32e35cfad84\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperd32e35cfad84\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperd32e35cfad84\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperd32e35cfad84\Nette\Localization\Translator::class, \_PhpScoperd32e35cfad84\Nette\Localization\ITranslator::class);
}
