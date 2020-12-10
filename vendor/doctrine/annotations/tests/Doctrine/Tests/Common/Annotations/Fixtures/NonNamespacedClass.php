<?php

namespace _PhpScoper8dd2e1c340b1;

use _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8dd2e1c340b1\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8dd2e1c340b1\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
