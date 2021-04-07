<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper14718bfcc75e\Nette\Utils;

use _PhpScoper14718bfcc75e\Nette;
if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString extends \_PhpScoper14718bfcc75e\Nette\HtmlStringable
    {
    }
} elseif (!\interface_exists(\_PhpScoper14718bfcc75e\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper14718bfcc75e\Nette\HtmlStringable::class, \_PhpScoper14718bfcc75e\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper14718bfcc75e\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator extends \_PhpScoper14718bfcc75e\Nette\Localization\Translator
    {
    }
} elseif (!\interface_exists(\_PhpScoper14718bfcc75e\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper14718bfcc75e\Nette\Localization\Translator::class, \_PhpScoper14718bfcc75e\Nette\Localization\ITranslator::class);
}
