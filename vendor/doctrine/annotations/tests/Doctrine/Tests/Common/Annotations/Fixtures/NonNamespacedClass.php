<?php

namespace _PhpScoper6a1dd9b8a650;

use _PhpScoper6a1dd9b8a650\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper6a1dd9b8a650\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper6a1dd9b8a650\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
