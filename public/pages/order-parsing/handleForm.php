<?php

include_once __DIR__ . "/../../../core/bootstrap.php";

function addClient(string $name, ?string $email = null, ?string $phone = null) {
    $fields = [
        "NAME"        => $name,
        "OPENED"      => "Y",
        "TYPE_ID"     => "CLIENT",
        "SOURCE_ID"   => "SELF",
        "PHONE"       => $phone ? [["VALUE" => $phone, "VALUE_TYPE"=>"WORK"]] : [],
        "EMAIL"       => $email ? [["VALUE" => $email, "VALUE_TYPE"=>"WORK"]] : [],
    ];

    $addResult = CRest::call("crm.contact.add", [
        "fields" => $fields,
    ]);

    return $addResult['result'];
}
function getClientId(string $name, ?string $email = null, ?string $phone = null)
{
    try {
        if ($email) {
            $withEmail = CRest::call("crm.duplicate.findbycomm", [
                "entity_type" => "CONTACT",
                "type"=>"EMAIL",
                "values"=>[$email],
            ])['result'];
            if(!empty($withEmail)) {
                return array_pop($withEmail['CONTACT']);
            }
        }
        throw new Exception('can`t find by email');
    } catch (Throwable $e) {
        try {
            if($phone) {
                $withPhone = CRest::call("crm.duplicate.findbycomm", [
                    "entity_type" => "CONTACT",
                    "type"=>"PHONE",
                    "values"=>[$phone],
                ])['result'];
                if(!empty($withPhone)) {
                    return array_pop($withPhone['CONTACT']);
                }
            }
        } catch (Throwable $e) {
            return addClient($name, $email, $phone);
        }
    }
    return null;
}

function addLead(array $arFields) {
    $urlForm = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . getPageUrl('order-parsing');
    $message = $arFields['message'];
    $dataCollect = $arFields['data-collect'];

    $arLead = [
        "TITLE"                => "Парсинг Дата (Заказ прайсинга)",
        "CONTACT_ID"           => getClientId($arFields['username'], $arFields['email'], $arFields['phone']),
        "SOURCE_ID"            => "46",
        "ASSIGNED_BY_ID"       => "66099",
        "COMMENTS"             => "Заполнение формы: " . $urlForm . "\n Текст сообщения: " . $message . "\n Сбор данных: " . $dataCollect,
    ];
    return CRest::call("crm.lead.add", ['fields' => $arLead]);
}

function deleteLead(int $id) {
    return CRest::call("crm.lead.delete", ['id' => $id]);
}




/*
 * Request
 * */
$json = file_get_contents('php://input');
$arFormData = json_decode($json, true);


$inputList = ['username', 'phone', 'message', 'data-collect', 'email'];
$errors = [];
foreach ($inputList as $input) {
    if (isset($arFormData[$input]) && empty($arFormData[$input])) {
        $errors[$input] = 'empty';
    }

    if (!empty($arFormData[$input])) {

        if ($input === 'email' && !filter_var($arFormData[$input], FILTER_VALIDATE_EMAIL)) {
            $errors[$input] = 'not_valid';
        }

        if ($input === 'phone' && (strlen( clearPhone($arFormData[$input]) ) !== 12) ) {
            $errors[$input] = 'not_valid';
        }

    }
}
($arFormData['data-collect'] == 'period') ? $arFormData['data-collect'] = 'Периодический' : $arFormData['data-collect'] = 'Разовый';


if (count($errors) > 0) {
    echo json_encode([ 'success' => false, 'errors' => $errors ]);
} else {
    //$result = addLead($arFormData);
    $result = ['test' => true];
    echo json_encode([ 'success' => true, 'data' => $result ]);
}