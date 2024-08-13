<?php

class Subject {

    private array $observers = [];

    public function attach(Observer $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void {
        $this->observers= array_filter($this->observers, function($obs) use ($observer) {
            return $obs !== $observer; 
        });
    }

    public function notify(string $articleTitle):void {
        foreach ($this->observers as $observer) {
            // La méthode update est appelée sur cet observateur. 
            // Cette méthode fait partie de l'interface Observer et chaque observateur doit l'implémenter
            $observer->update($articleTitle);
        }

    }

}