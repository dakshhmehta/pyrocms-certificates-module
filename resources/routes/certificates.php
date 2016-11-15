<?php

return [
    'admin/certificates' => 'Tws\CertificatesModule\Http\Controller\Admin\CertificatesController@index',
    'admin/certificates/create' => 'Tws\CertificatesModule\Http\Controller\Admin\CertificatesController@create',
    'admin/certificates/edit/{id}' => 'Tws\CertificatesModule\Http\Controller\Admin\CertificatesController@edit'
];
