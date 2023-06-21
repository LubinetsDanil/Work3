<?php
class Lender {
    private $lenders = [];

    public function addLender($lenderName, $criteria) {
        $this->lenders[$lenderName] = $criteria; // Додавання кредитора до системи
    }

    public function obtainQuotes($applicationData) {
        $quotes = [];

        foreach ($this->lenders as $lenderName => $criteria) {
            // Застосовуємо критерії, специфічні для кредитора, щоб визначити, чи прийме кредитор заявку
            if ($this->isApplicationAccepted($applicationData, $criteria)) {
                // Отримуємо пропозицію від кредитора на основі даних заявки
                $quote = $this->getQuoteFromLender($applicationData, $lenderName);
                $quotes[$lenderName] = $quote; // Зберігаємо пропозицію
            }
        }

        return $quotes;
    }

    private function isApplicationAccepted($applicationData, $criteria) {
        // Реалізуйте логіку валідації заявки відповідно до критеріїв кредитора
        // Поверніть true, якщо заявка приймається, або false, якщо заявка відхиляється
    }

    private function getQuoteFromLender($applicationData, $lenderName) {
        // Реалізуйте код для отримання пропозиції від кредитора на основі даних заявки
        // Використовуйте $applicationData та $lenderName для взаємодії з кредитором
    }

}


