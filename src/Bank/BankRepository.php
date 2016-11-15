<?php namespace Tws\CertificatesModule\Bank;

use Tws\CertificatesModule\Bank\Contract\BankRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class BankRepository extends EntryRepository implements BankRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var BankModel
     */
    protected $model;

    /**
     * Create a new BankRepository instance.
     *
     * @param BankModel $model
     */
    public function __construct(BankModel $model)
    {
        $this->model = $model;
    }
}
