<?php

namespace _PhpScoper3a22e8e0bd94;

use _PhpScoper3a22e8e0bd94\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper3a22e8e0bd94\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper3a22e8e0bd94\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
