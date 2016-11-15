<?php namespace Tws\CertificatesModule\Certificate\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class CertificateTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'certificate_no',
        'date_of_creation' => [
            'value' => 'entry.date_of_creation.date',
        ],
        'date_of_maturity' => [
            'value' => 'entry.date_of_maturity.date',
        ],
        'amount' => [
            'value' => 'entry.amount.currency'
        ],
        'mature_amount' => [
            'value' => 'entry.amount.currency'
        ],
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit',
        'delete',
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
