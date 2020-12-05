<?php

namespace _PhpScoper59ccd3f8e121;

use _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper59ccd3f8e121\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper59ccd3f8e121\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
