<?php

namespace _PhpScoper87c77ad5700d;

use _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper87c77ad5700d\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper87c77ad5700d\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
