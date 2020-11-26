<?php

namespace _PhpScopercb217fd4e736;

use _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopercb217fd4e736\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopercb217fd4e736\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
