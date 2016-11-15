<?php namespace Tws\CertificatesModule\Http\Controller\Admin;

use Tws\CertificatesModule\Bank\Form\BankFormBuilder;
use Tws\CertificatesModule\Bank\Table\BankTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class BanksController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param BankTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BankTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BankFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BankFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BankFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BankFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
