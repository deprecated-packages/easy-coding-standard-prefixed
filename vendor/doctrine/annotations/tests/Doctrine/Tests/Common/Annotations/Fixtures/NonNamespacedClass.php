<?php

namespace _PhpScoper470d6df94ac0;

use _PhpScoper470d6df94ac0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper470d6df94ac0\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper470d6df94ac0\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
