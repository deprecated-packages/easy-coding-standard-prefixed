<?php

namespace _PhpScoper57210e33e43a;

use _PhpScoper57210e33e43a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper57210e33e43a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper57210e33e43a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
