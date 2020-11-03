<?php

namespace _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper2b44cb0c30af\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
