<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__ . '/problems')
    // ->exclude([
    //     'storage/framework/views/'
    // ])
;

return (new PhpCsFixer\Config())
    // ->setParallelConfig(new PhpCsFixer\Runner\Parallel\ParallelConfig(1, 5))
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER-CS' => true,
        '@PSR12' => true,
        '@PHP82Migration' => true,
    ])
    ->setFinder($finder)
;


