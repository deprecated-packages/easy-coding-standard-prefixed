<?php

namespace _PhpScoper9f8d5dcff860;

use _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper9f8d5dcff860\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper9f8d5dcff860\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
