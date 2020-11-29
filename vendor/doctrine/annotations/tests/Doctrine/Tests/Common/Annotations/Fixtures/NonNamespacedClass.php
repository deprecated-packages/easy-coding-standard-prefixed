<?php

namespace _PhpScoper9d73a84b09ad;

use _PhpScoper9d73a84b09ad\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper9d73a84b09ad\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper9d73a84b09ad\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
