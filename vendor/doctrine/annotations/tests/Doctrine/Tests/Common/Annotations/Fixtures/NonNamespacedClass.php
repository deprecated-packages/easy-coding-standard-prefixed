<?php

namespace _PhpScopera4fc793dae73;

use _PhpScopera4fc793dae73\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera4fc793dae73\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera4fc793dae73\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
