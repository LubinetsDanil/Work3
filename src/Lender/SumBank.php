<?php

class SumBank {
    // Тіло класу SumBank
}

// Створення об'єкту Lender
$lender = new Lender();

// Додавання кредитора SumBank
$lender->addLender('SumBank', [
    'minCreditScore' => 500,
    'minIncome' => 2000,
    'allowedLoanPurposes' => ['Home Improvement', 'Debt Consolidation'],
], function ($applicationData) {
    // Логіка отримання пропозиції від кредитора SumBank на основі даних заявки $applicationData
    // Поверніть пропозицію кредитора у відповідному форматі
    // Наприклад:
    return [
        'interestRate' => 5.2,
        'loanAmount' => 10000,
        'term' => 36,
    ];
});

// Отримання пропозицій від кредиторів на основі даних заявки
$applicationData = []; // Дані заявки
$quotes = $lender->obtainQuotes($applicationData);

// Виведення пропозицій
foreach ($quotes as $lenderName => $quote) {
    echo "Пропозиція від $lenderName: ";
    echo "Процентна ставка: " . $quote['interestRate'] . "%, ";
    echo "Сума кредиту: " . $quote['loanAmount'] . ", ";
    echo "Термін: " . $quote['term'] . " місяців";
    echo "<br>";
}
