<?php

namespace _PhpScoper13160cf3462c;

use _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper13160cf3462c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper13160cf3462c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
