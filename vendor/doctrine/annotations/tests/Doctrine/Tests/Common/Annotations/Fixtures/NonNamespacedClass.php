<?php

namespace _PhpScoper5a9febfbbe05;

use _PhpScoper5a9febfbbe05\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5a9febfbbe05\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5a9febfbbe05\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
