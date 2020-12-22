<?php

namespace _PhpScoper68a3a2539032;

use _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper68a3a2539032\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper68a3a2539032\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
