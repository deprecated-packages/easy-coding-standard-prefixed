<?php

namespace _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures;

use _PhpScoper745103eaabcd\Doctrine\Tests\Common\Annotations\Fixtures\Annotation\Route;
/**
 * @NoAnnotation
 * @IgnoreAnnotation("NoAnnotation")
 * @Route("foo")
 */
class InvalidAnnotationUsageButIgnoredClass
{
}
