<?php

namespace _PhpScopera40fc53e636b;

use _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopera40fc53e636b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopera40fc53e636b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
