<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Tws\CertificatesModule\Bank\BankModel;
use Tws\CertificatesModule\User\UserModel;

class TwsModuleCertificatesCreateCertificatesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        // Certificates stream fields
        'holder' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'related' => UserModel::class,
                'mode' => 'tags',
            ]
        ],
        'nominee' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'related' => UserModel::class,
                'mode' => 'lookup',
            ]
        ],
        'date_of_creation' => [
            'type' => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'date',
            ],
        ],
        'date_of_maturity' => [
            'type' => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'date',
            ],
        ],
        'amount' => [
            'type' => 'anomaly.field_type.decimal',
            'config' => [
                'default_value' => 0,
                'min' => 0,
                'point' => '.',
                'separator' => ',',
                'decimals' => 2,
            ],
        ],
        'mature_amount' => [
            'type' => 'anomaly.field_type.decimal',
            'config' => [
                'default_value' => 0,
                'min' => 0,
                'point' => '.',
                'separator' => ',',
                'decimals' => 2,
            ],
        ],
        'certificate_no' => 'anomaly.field_type.text',
        'bank' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => BankModel::class,
            ]
        ],
        
        // Banks field
        'name' => [
            'type' => 'anomaly.field_type.text',
        ],
    ];

}
