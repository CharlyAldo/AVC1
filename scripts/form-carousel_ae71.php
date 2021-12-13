<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Envio de Formulario',
    'email_message' => 'Mensaje',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'cmgg1984@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Nombres',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nombres\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Mensaje',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Mensaje\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>