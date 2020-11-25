<?php

namespace _PhpScoper544eb478a6f6;

use _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper544eb478a6f6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper544eb478a6f6\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
