<?php

namespace _PhpScoper64ca614e27fd;

use _PhpScoper64ca614e27fd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper64ca614e27fd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper64ca614e27fd\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
