<?php

namespace _PhpScoperc95ae4bf942a;

use _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc95ae4bf942a\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc95ae4bf942a\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
