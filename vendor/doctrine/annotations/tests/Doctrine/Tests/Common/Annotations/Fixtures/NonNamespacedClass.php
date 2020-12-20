<?php

namespace _PhpScopera51a90153f58;

use _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera51a90153f58\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera51a90153f58\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
