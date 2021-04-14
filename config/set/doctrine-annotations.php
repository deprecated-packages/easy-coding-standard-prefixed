<?php

declare (strict_types=1);
namespace _PhpScoper7b319b4d8e1c;

use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationArrayAssignmentFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationIndentationFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer;
use _PhpScoper7b319b4d8e1c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\Annotation\DoctrineAnnotationNewlineInNestedAnnotationFixer;
return static function (\_PhpScoper7b319b4d8e1c\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Symplify\CodingStandard\Fixer\Annotation\DoctrineAnnotationNewlineInNestedAnnotationFixer::class);
    $services->set(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationIndentationFixer::class)->call('configure', [['indent_mixed_lines' => \true]]);
    $services->set(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer::class)->call('configure', [['after_array_assignments_equals' => \false, 'before_array_assignments_equals' => \false]]);
    $services->set(\PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationArrayAssignmentFixer::class);
};
