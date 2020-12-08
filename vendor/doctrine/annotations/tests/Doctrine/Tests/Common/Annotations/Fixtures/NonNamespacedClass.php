<?php

namespace _PhpScoperf053e888b664;

use _PhpScoperf053e888b664\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperf053e888b664\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperf053e888b664\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
