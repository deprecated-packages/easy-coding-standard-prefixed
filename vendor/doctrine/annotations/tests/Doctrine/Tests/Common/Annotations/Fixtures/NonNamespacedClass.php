<?php

namespace _PhpScopercae980ebf12d;

use _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopercae980ebf12d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopercae980ebf12d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
