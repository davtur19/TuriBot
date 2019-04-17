<?php


function setPassportDataErrors($user_id, $errors, $response = RESPONSE)
{
    $args = [
        'user_id' => $user_id,
        'errors' => $errors,
    ];

    if ($response === true) {
        return curlRequest('setPassportDataErrors', $args);
    }
    return jsonPayload('setPassportDataErrors', $args);
}
