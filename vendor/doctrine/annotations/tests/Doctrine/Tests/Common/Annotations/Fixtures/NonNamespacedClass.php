<?php

namespace _PhpScoper92feab6bddf8;

use _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper92feab6bddf8\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper92feab6bddf8\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
