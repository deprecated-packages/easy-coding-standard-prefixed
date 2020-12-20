<?php

namespace _PhpScoperab9510cd5d97;

use _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperab9510cd5d97\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperab9510cd5d97\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
