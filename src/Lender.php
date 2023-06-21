<?php
class Lender {
    private $lenders = [];

    public function addLender($lenderName, $criteria) {
        $this->lenders[$lenderName] = $criteria; // Adding a lender to the system
    }

    public function obtainQuotes($applicationData) {
        $quotes = [];

        foreach ($this->lenders as $lenderName => $criteria) {
            // Applying lender-specific criteria to determine if the lender will accept the application
            if ($this->isApplicationAccepted($applicationData, $criteria)) {
                // Getting a quote from the lender based on the application data
                $quote = $this->getQuoteFromLender($applicationData, $lenderName);
                $quotes[$lenderName] = $quote; // Saving the quote
            }
        }

        return $quotes;
    }

    private function isApplicationAccepted($applicationData, $criteria) {
        // Implement the application validation logic based on the lender's criteria
        // Return true if the application is accepted, or false if the application is rejected
    }

    private function getQuoteFromLender($applicationData, $lenderName) {
        // Implement the code to obtain a quote from the lender based on the application data
        // Use $applicationData and $lenderName to interact with the lender
    }

}



