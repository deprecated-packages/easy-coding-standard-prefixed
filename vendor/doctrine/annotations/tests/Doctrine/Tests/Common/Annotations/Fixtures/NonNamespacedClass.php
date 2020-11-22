<?php

namespace _PhpScoper6db4fde00cda;

use _PhpScoper6db4fde00cda\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6db4fde00cda\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6db4fde00cda\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
