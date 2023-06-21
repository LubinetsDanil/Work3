<?php

class SumBank {
    // Class body of SumBank
}

// Creating an instance of Lender
$lender = new Lender();

// Adding SumBank as a lender
$lender->addLender('SumBank', [
    'minCreditScore' => 500,
    'minIncome' => 2000,
    'allowedLoanPurposes' => ['Home Improvement', 'Debt Consolidation'],
], function ($applicationData) {
    // Logic for obtaining an offer from SumBank based on the application data $applicationData
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
