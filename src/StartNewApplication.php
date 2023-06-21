<?php 
class StartNewApplication {
    private $applicationData;

    public function startNewApplication() {
        $this->applicationData = []; // Ініціалізуємо порожні дані заявки
    }

    public function setApplicationData($data) {
        $this->applicationData = $data; // Встановлюємо дані заявки
    }

    // Інші методи класу...

}


