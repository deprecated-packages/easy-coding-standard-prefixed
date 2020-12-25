<?php

namespace _PhpScoper15c5423f4731;

use _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper15c5423f4731\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper15c5423f4731\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
