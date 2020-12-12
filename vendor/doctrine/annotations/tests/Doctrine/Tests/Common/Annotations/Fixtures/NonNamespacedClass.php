<?php

namespace _PhpScoperef870243cfdb;

use _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperef870243cfdb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperef870243cfdb\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
