<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TwsModuleCertificatesCreateCertificatesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'certificates',
        'title_column' => 'certificate_no',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'bank' => [
            'required' => true,
        ],
        'holder' => [
            'required' => true,
        ],
        'nominee' => [
            'required' => true,
        ],
        'date_of_creation' => [
            'required' => true,
        ],
        'date_of_maturity' => [
            'required' => true,
        ],
        'amount' => [
            'required' => true,
        ],
        'mature_amount' => [
            'required' => true,
        ],
        'certificate_no' => [
            'required' => true,
            'unique' => true,
        ],
    ];
}
