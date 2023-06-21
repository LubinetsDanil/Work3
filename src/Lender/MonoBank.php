<?php

class MonoBank {
    // Тіло класу MonoBank
}

// Створення об'єкту Lender
$lender = new Lender();

// Додавання кредитора MonoBank
$lender->addLender('MonoBank', [
    'minCreditScore' => 2000,
    'minIncome' => 10000,
    'allowedLoanPurposes' => ['Home Improvement', 'Debt Consolidation'],
], function ($applicationData) {
    // Логіка отримання пропозиції від кредитора MonoBank на основі даних заявки $applicationData
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
