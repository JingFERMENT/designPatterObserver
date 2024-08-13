<?php

class NewPublisher extends Subject {
    public function publishArticle (string $title): void {
        echo "Nouvel article publié : $title\n";
        $this->notify($title);
    }
}