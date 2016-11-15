<?php namespace Tws\CertificatesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class CertificatesModule extends Module
{
    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'certificates' => [
            'buttons' => [
                'create' => [
                    'text' => 'Add New Certificate',
                ],
            ]
        ],
        'users' => [
            'buttons' => [
                'create' => [
                    'text' => 'Add User',
                ],
            ]
        ],
        'banks' => [
            'buttons' => [
                'create' => [
                    'text' => 'Add New Bank',
                ],
            ]
        ],
    ];
}
