<?php

namespace _PhpScoper79449c4e744b;

use _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper79449c4e744b\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper79449c4e744b\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
