<?php

/**
 * Extension Manager/Repository config file for ext "dierenkliniektilburgoudnoord".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'dierenkliniektilburgoudnoord',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Dierenkliniektilburgoudnoord\\DierenkliniektilburgoudnoordSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Patrick Schriner',
    'author_email' => 'p.schriner@gmail.com',
    'author_company' => '---',
    'version' => '1.0.0',
];
