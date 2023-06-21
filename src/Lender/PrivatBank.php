<?php
class PrivatBank {
    // The body of the PrivatBank class
}

// Creating a Lender object
$lender = new Lender();

// Adding PrivatBank as a lender
$lender->addLender('PrivatBank', [
    'minCreditScore' => 1000,
    'minIncome' => 5000,
    'allowedLoanPurposes' => ['Home Improvement', 'Debt Consolidation'],
], function ($applicationData) {
    // Logic for obtaining an offer from the PrivatBank lender based on the application data $applicationData
    // Return the lender's offer in the appropriate format
    // For example:
    return [
        'interestRate' => 5.2,
        'loanAmount' => 10000,
        'term' => 36,
    ];
});

// Obtaining quotes from lenders based on the application data
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

