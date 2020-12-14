<?php

namespace _PhpScoper4e47e3b12394;

use _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Template;
use _PhpScoper4e47e3b12394\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
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
\class_alias('_PhpScoper4e47e3b12394\\AnnotationsTestsFixturesNonNamespacedClass', 'AnnotationsTestsFixturesNonNamespacedClass', \false);
