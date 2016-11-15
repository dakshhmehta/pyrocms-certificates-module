<?php namespace Tws\CertificatesModule\User;

use Tws\CertificatesModule\User\Contract\UserRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class UserRepository extends EntryRepository implements UserRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var UserModel
     */
    protected $model;

    /**
     * Create a new UserRepository instance.
     *
     * @param UserModel $model
     */
    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }
}
