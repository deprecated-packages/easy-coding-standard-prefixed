<?php

namespace _PhpScoper7cef7256eba6;

use _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7cef7256eba6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @Route("foo")
 * @Template
 */
class AnnotationsTestsFixturesNonNamespacedClass
{
}
/**
 * @Route("foo")
 * @Template
 */
\class_alias('_PhpScoper7cef7256eba6\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
