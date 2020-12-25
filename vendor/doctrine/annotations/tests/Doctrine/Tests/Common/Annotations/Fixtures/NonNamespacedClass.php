<?php

namespace _PhpScoper92597f5b42a7;

use _PhpScoper92597f5b42a7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper92597f5b42a7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper92597f5b42a7\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
