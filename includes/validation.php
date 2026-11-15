
<?php

function validateCardName($name) {
    return is_string($name)
        && strlen(trim($name)) > 0
        && strlen(trim($name)) <= 100;
}

function validateCardType($type) {
    $allowedTypes = [
        'Shopping',
        'Food',
        'Technology',
        'Entertainment',
        'Travel'
    ];

    return is_string($type)
        && in_array($type, $allowedTypes, true);
}

function validateCardValue($value) {
    return is_scalar($value)
        && is_numeric($value)
        && is_finite((float)$value)
        && (float)$value > 0;
}

function validatePointsRequired($points) {
    return filter_var(
        $points,
        FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 1]]
    ) !== false;
}

function validateCardId($id) {
    return filter_var(
        $id,
        FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 1]]
    ) !== false;
}

function validateGiftCard($data) {
    return validateCardName($data['card_name'] ?? null)
        && validateCardType($data['card_type'] ?? null)
        && validateCardValue($data['card_value'] ?? null)
        && validatePointsRequired($data['points_required'] ?? null);
}
