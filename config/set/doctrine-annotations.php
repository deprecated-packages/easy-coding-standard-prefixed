<?php

declare (strict_types=1);
namespace _PhpScoper78e1a27e740b;

use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationArrayAssignmentFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationIndentationFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationSpacesFixer;
use _PhpScoper78e1a27e740b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\CodingStandard\Fixer\Annotation\DoctrineAnnotationNewlineInNestedAnnotationFixer;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DoctrineAnnotationNewlineInNestedAnnotationFixer::class);
    $services->set(DoctrineAnnotationIndentationFixer::class)->call('configure', [['indent_mixed_lines' => \true]]);
    $services->set(DoctrineAnnotationSpacesFixer::class)->call('configure', [['after_array_assignments_equals' => \false, 'before_array_assignments_equals' => \false]]);
    $services->set(DoctrineAnnotationArrayAssignmentFixer::class);
};
