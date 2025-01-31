<?php

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

function getCityId(string $name)
{
    $data =  CRest::call('lists.element.get', [
        'IBLOCK_TYPE_ID' => 'lists',
        'IBLOCK_ID' => '171',
        'FILTER' => [
            '=NAME' => $name,
        ]
    ]);

    if (!empty($data['result'])) {
        return $data['result'][0]['ID'];
    }
    return null;
}

function addLead(array $arFields)
{
    $arLead = [
        "TITLE"                => "ttl",
        "SOURCE_ID"            => "",
        "CONTACT_ID"           => getClientId($arFields['name'], $arFields['email'], $arFields['phone']),
        "ASSIGNED_BY_ID"       => "55093", // ответственный (Нет)
        "UF_CRM_1633325664"    => getCityId($arFields['city']), // Город клиента (id города в b24)
        "COMMENTS" => $arFields['COMMENT_HTML']
    ];
    return CRest::call("crm.lead.add", $arLead);
}
?>


