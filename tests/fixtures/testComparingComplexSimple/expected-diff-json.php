<?php

/**
 * JBZoo Toolbox - Composer-Diff
 *
 * This file is part of the JBZoo Toolbox project.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    Composer-Diff
 * @license    MIT
 * @copyright  Copyright (C) JBZoo.com, All rights reserved.
 * @link       https://github.com/JBZoo/Composer-Diff
 */

return [
    'require' => [
        'vendor/downgraded' => [
            'name'         => 'vendor/downgraded',
            'url'          => 'https://gitlab.com/vendor/downgraded',
            'version_from' => '2.0.0',
            'version_to'   => '1.0.0',
            'mode'         => 'Downgraded',
            'compare'      => 'https://gitlab.com/vendor/downgraded/compare/2.0.0...1.0.0',
        ],
        'vendor/new'        => [
            'name'         => 'vendor/new',
            'url'          => 'https://gitlab.com/vendor/new',
            'version_from' => null,
            'version_to'   => '1.0.0',
            'mode'         => 'New',
            'compare'      => null,
        ],
        'vendor/no-tag'     => [
            'name'         => 'vendor/no-tag',
            'url'          => 'https://gitlab.com/vendor/package-1',
            'version_from' => 'dev-master@bbc0fba',
            'version_to'   => 'dev-master@f2f9280',
            'mode'         => 'Changed',
            'compare'      => 'https://gitlab.com/vendor/package-1/compare/bbc0fba...f2f9280',
        ],
        'vendor/no-tag-new' => [
            'name'         => 'vendor/no-tag-new',
            'url'          => 'https://gitlab.com/vendor-1/package-1',
            'version_from' => null,
            'version_to'   => 'dev-develop@a999014',
            'mode'         => 'New',
            'compare'      => null,
        ],
        'vendor/removed'    => [
            'name'         => 'vendor/removed',
            'url'          => 'https://gitlab.com/vendor/removed',
            'version_from' => '1.0.0',
            'version_to'   => null,
            'mode'         => 'Removed',
            'compare'      => null,
        ],
        'vendor/upgraded'   => [
            'name'         => 'vendor/upgraded',
            'url'          => 'https://gitlab.com/vendor/upgraded',
            'version_from' => '1.0.0',
            'version_to'   => '2.0.0',
            'mode'         => 'Upgraded',
            'compare'      => 'https://gitlab.com/vendor/upgraded/compare/1.0.0...2.0.0',
        ]
    ]
];
