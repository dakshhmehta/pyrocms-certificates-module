<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TwsModuleCertificatesCreateUsersStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'users',
        'translatable' => true,
        'title_column' => 'name',
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required' => true,
            'translatable' => true,
        ]
    ];

}
