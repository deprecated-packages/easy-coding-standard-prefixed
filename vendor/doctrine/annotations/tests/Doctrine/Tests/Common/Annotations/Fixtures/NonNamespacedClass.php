<?php

namespace _PhpScoper7574e8786845;

use _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper7574e8786845\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper7574e8786845\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
