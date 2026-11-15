
<?php
require_once __DIR__ . '/../includes/validation.php';

function runTest($name, $expected, $actual) {
    $passed = $expected === $actual;
    echo ($passed ? "PASS" : "FAIL") . ": $name\n";
}

echo "Gift Card Validation Tests\n\n";

// Test card names
runTest("Valid card name", true, validateCardName("Amazon"));
runTest("Empty card name", false, validateCardName(""));
runTest("Long card name", false, validateCardName(str_repeat("A", 101)));

// Test card types
runTest("Valid card type", true, validateCardType("Shopping"));
runTest("Invalid card type", false, validateCardType("Unknown"));

// Test card values
runTest("Valid card value", true, validateCardValue(25));
runTest("Zero card value", false, validateCardValue(0));
runTest("Negative card value", false, validateCardValue(-10));

// Test required points
runTest("Valid points", true, validatePointsRequired(2500));
runTest("Zero points", false, validatePointsRequired(0));
runTest("Negative points", false, validatePointsRequired(-100));

// Test card IDs
runTest("Valid card ID", true, validateCardId(1));
runTest("Invalid card ID", false, validateCardId(-1));

// Test complete gift card
$validCard = [
    'card_name' => 'Amazon',
    'card_type' => 'Shopping',
    'card_value' => 25,
    'points_required' => 2500
];

runTest("Valid gift card", true, validateGiftCard($validCard));

$invalidCard = $validCard;
$invalidCard['card_value'] = -25;

runTest("Invalid gift card", false, validateGiftCard($invalidCard));

echo "\nTests completed.\n";
?>
