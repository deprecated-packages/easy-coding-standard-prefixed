<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */
declare (strict_types=1);
namespace _PhpScoper326af2119eba\Nette\Utils;

if (\false) {
    /** @deprecated use Nette\HtmlStringable */
    interface IHtmlString
    {
    }
} elseif (!\interface_exists(\_PhpScoper326af2119eba\Nette\Utils\IHtmlString::class)) {
    \class_alias(\_PhpScoper326af2119eba\Nette\HtmlStringable::class, \_PhpScoper326af2119eba\Nette\Utils\IHtmlString::class);
}
namespace _PhpScoper326af2119eba\Nette\Localization;

if (\false) {
    /** @deprecated use Nette\Localization\Translator */
    interface ITranslator
    {
    }
} elseif (!\interface_exists(\_PhpScoper326af2119eba\Nette\Localization\ITranslator::class)) {
    \class_alias(\_PhpScoper326af2119eba\Nette\Localization\Translator::class, \_PhpScoper326af2119eba\Nette\Localization\ITranslator::class);
}
