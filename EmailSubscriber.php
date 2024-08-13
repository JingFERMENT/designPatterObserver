<?php

class EmailSubscriber implements Observer {
    private string $email;

    public function __construct(string $email) {
        $this->email = $email;
    }

    public function update(string $articleTitle): void {
        echo "Envoyer un email à $this->email : Nouvel article publié - $articleTitle\n";
    }

}