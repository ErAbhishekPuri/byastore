<?php
use PDFfiller\OAuth2\Client\Provider\FillRequest;

$provider = require_once __DIR__ . '/../bootstrap/initWithFabric.php';

$fillRequestEntity = new FillRequest($provider);
$fillRequestEntity->document_id = 53690143;
$fillRequestEntity->access = "full";
$fillRequestEntity->status = "public";
$fillRequestEntity->email_required = true;
$fillRequestEntity->name_required = true;
$fillRequestEntity->custom_message = "Custom";
$fillRequestEntity->callback_url = "http://apicallbacks.pdffiller.com/handle?hash=l2f_php_client";
$fillRequestEntity->notification_emails[] = ['name' => 'name', 'email' => 'email@email.com'];
$fillRequestEntity->additional_documents[] = 'name1';
$fillRequestEntity->additional_documents[] = 'name2';
$fillRequestEntity->enforce_required_fields = true;
$fillRequestEntity->welcome_screen = false;

$e = $fillRequestEntity->save();

dd($e);
