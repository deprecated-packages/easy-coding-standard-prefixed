<?php

namespace _PhpScoperddde3ba4aebc;

use _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperddde3ba4aebc\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperddde3ba4aebc\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
