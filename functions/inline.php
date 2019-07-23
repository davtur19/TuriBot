<?php

//inline mode
function answerInlineQuery(
    $inline_query_id,
    $results,
    $cache_time = null,
    $is_personal = null,
    $next_offset = null,
    $switch_pm_text = null,
    $switch_pm_parameter = null,
    $response = RESPONSE
) {
    $results = json_encode($results);
    $args = [
        'inline_query_id' => $inline_query_id,
        'results'         => $results,
    ];

    if (isset($cache_time)) {
        $args['cache_time'] = $cache_time;
    }
    if (isset($is_personal)) {
        $args['is_personal'] = $is_personal;
    }
    if (isset($next_offset)) {
        $args['next_offset'] = $next_offset;
    }
    if (isset($switch_pm_text)) {
        $args['switch_pm_text'] = $switch_pm_text;
    }
    if (isset($switch_pm_parameter)) {
        $args['switch_pm_parameter'] = $switch_pm_parameter;
    }

    if ($response === true) {
        return curlRequest('answerInlineQuery', $args);
    }
    return jsonPayload('answerInlineQuery', $args);
}
