<?php

namespace _PhpScoper5ea36b274140;

use _PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper5ea36b274140\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper5ea36b274140\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
