<?php

namespace _PhpScoperba5852cc6147;

use _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoperba5852cc6147\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoperba5852cc6147\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
