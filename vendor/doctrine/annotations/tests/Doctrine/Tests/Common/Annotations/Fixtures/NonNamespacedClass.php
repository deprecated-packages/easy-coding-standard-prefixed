<?php

namespace _PhpScoperb6d4bd368bd9;

use _PhpScoperb6d4bd368bd9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperb6d4bd368bd9\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperb6d4bd368bd9\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
