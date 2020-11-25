<?php

namespace _PhpScoperd301db66c80c;

use _PhpScoperd301db66c80c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd301db66c80c\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd301db66c80c\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
