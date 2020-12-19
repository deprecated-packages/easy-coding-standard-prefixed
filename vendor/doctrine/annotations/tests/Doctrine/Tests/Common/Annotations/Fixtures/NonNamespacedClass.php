<?php

namespace _PhpScoper59da9ac954a6;

use _PhpScoper59da9ac954a6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper59da9ac954a6\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper59da9ac954a6\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
