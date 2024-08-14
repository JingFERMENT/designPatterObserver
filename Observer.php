<?php 

/* Design pattern Observer : Un patron pour notifier automatiquement plusieurs objets de l'état 
 d'un autre objet. Relation un-à-plusieurs, utilisé pour la notification d'événements.
 */

// C'est l'interface que tous les observateurs doivent implémenter.
interface Observer {
    public function update(string $articleTitle): void;
}