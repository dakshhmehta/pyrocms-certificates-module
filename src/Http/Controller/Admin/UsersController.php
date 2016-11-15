<?php namespace Tws\CertificatesModule\Http\Controller\Admin;

use Tws\CertificatesModule\User\Form\UserFormBuilder;
use Tws\CertificatesModule\User\Table\UserTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class UsersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param UserTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(UserTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param UserFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(UserFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param UserFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(UserFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
