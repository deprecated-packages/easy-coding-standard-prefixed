<?php

namespace _PhpScoper7f41430b5328;

use _PhpScoper7f41430b5328\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7f41430b5328\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7f41430b5328\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
