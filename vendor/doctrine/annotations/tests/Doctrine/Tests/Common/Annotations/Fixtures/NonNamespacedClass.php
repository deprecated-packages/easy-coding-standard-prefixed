<?php

namespace _PhpScoper8a05d21c15c9;

use _PhpScoper8a05d21c15c9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8a05d21c15c9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8a05d21c15c9\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
