<?php

namespace _PhpScopercda2b863d098;

use _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScopercda2b863d098\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScopercda2b863d098\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
