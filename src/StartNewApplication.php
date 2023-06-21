<?php 
class StartNewApplication {
    private $applicationData;

    public function startNewApplication() {
        $this->applicationData = []; // Initializing empty application data
    }

    public function setApplicationData($data) {
        $this->applicationData = $data; // Setting application data
    }
}

