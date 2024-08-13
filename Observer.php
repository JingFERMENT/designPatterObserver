<?php 
/*  Observer : C'est l'interface / la classe qui doit être implémentée par 
 les objets qui veulent être notifiés des changements du sujet. */

// C'est l'interface que tous les observateurs doivent implémenter.
interface Observer {
    public function update(string $articleTitle): void;
}