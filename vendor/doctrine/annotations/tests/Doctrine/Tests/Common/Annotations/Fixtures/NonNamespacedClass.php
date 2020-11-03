<?php

namespace _PhpScoper8de082cbb8c7;

use _PhpScoper8de082cbb8c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper8de082cbb8c7\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper8de082cbb8c7\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
