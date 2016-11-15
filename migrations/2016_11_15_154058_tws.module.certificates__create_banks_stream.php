<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TwsModuleCertificatesCreateBanksStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'banks',
        'title_column' => 'name',
        'sortable' => true,
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required' => true,
            'unique' => true,
            'translatable' => true,
        ]
    ];

}
