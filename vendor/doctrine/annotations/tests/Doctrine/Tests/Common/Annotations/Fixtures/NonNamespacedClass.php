<?php

namespace _PhpScoper32136251d417;

use _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper32136251d417\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper32136251d417\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
