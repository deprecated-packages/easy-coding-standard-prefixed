<?php

namespace _PhpScoper47644ab3aa9a;

use _PhpScoper47644ab3aa9a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper47644ab3aa9a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper47644ab3aa9a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
