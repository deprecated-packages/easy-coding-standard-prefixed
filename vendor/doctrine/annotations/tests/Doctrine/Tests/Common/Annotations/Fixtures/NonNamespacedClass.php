<?php

namespace _PhpScoperda2604e33acb;

use _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperda2604e33acb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperda2604e33acb\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
