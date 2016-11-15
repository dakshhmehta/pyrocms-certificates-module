<?php namespace Tws\CertificatesModule\Http\Controller\Admin;

use Tws\CertificatesModule\Certificate\Form\CertificateFormBuilder;
use Tws\CertificatesModule\Certificate\Table\CertificateTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CertificatesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CertificateTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CertificateTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CertificateFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CertificateFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CertificateFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CertificateFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
