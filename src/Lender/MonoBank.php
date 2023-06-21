<?php
class MonoBank {
    // Class body of MonoBank
}

// Creating a Lender object
$lender = new Lender();

// Adding MonoBank as a lender
$lender->addLender('MonoBank', [
    'minCreditScore' => 2000,
    'minIncome' => 10000,
    'allowedLoanPurposes' => ['Home Improvement', 'Debt Consolidation'],
], function ($applicationData) {
    // Logic to receive an offer from MonoBank based on the application data $applicationData
    // Return the lender's offer in the appropriate format
    // For example:
    return [
        'interestRate' => 5.2,
        'loanAmount' => 10000,
        'term' => 36,
    ];
});

// Obtaining quotes from lenders based on application data
$applicationData = []; // Application data
$quotes = $lender->obtainQuotes($applicationData);

// Displaying the quotes
foreach ($quotes as $lenderName => $quote) {
    echo "Offer from $lenderName: ";
    echo "Interest Rate: " . $quote['interestRate'] . "%, ";
    echo "Loan Amount: " . $quote['loanAmount'] . ", ";
    echo "Term: " . $quote['term'] . " months";
    echo "<br>";
}
