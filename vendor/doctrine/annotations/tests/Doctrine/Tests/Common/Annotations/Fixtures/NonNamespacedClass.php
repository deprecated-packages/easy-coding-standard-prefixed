<?php

namespace _PhpScoper069ebd53a518;

use _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper069ebd53a518\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper069ebd53a518\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
