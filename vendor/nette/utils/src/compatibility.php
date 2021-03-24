<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoperc98ae2003489\Nette\Utils;

use _PhpScoperc98ae2003489\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoperc98ae2003489\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoperc98ae2003489\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoperc98ae2003489\Nette\HtmlStringable::class, \_PhpScoperc98ae2003489\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoperc98ae2003489\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoperc98ae2003489\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoperc98ae2003489\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoperc98ae2003489\Nette\Localization\Translator::class, \_PhpScoperc98ae2003489\Nette\Localization\ITranslator::class);
}
