<?php

namespace _PhpScoperc5bee3a837bb;

use _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperc5bee3a837bb\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperc5bee3a837bb\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
