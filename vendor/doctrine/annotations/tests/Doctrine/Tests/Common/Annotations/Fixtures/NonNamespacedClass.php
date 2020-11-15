<?php

namespace _PhpScopercb576ca159b5;

use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopercb576ca159b5\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopercb576ca159b5\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
