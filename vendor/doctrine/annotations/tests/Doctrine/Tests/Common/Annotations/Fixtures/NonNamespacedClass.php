<?php

namespace _PhpScoper8acb416c2f5a;

use _PhpScoper8acb416c2f5a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8acb416c2f5a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8acb416c2f5a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
