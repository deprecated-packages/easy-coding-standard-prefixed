<?php

namespace _PhpScoperd74b3ed28382;

use _PhpScoperd74b3ed28382\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperd74b3ed28382\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperd74b3ed28382\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
