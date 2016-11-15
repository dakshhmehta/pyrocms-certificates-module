<?php namespace Tws\CertificatesModule\Certificate;

use Tws\CertificatesModule\Certificate\Contract\CertificateRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class CertificateRepository extends EntryRepository implements CertificateRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CertificateModel
     */
    protected $model;

    /**
     * Create a new CertificateRepository instance.
     *
     * @param CertificateModel $model
     */
    public function __construct(CertificateModel $model)
    {
        $this->model = $model;
    }
}
