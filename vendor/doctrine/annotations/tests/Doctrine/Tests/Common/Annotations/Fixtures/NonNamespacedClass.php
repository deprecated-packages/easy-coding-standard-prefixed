<?php

namespace _PhpScoper3e7ab659bd82;

use _PhpScoper3e7ab659bd82\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3e7ab659bd82\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3e7ab659bd82\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
