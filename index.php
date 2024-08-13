<?php

// Création du sujet (NewPublisher)
$publisher = new NewPublisher();

// Création des observateurs (abonnés)
$emailSubscriber = new EmailSubscriber("example@example.com");

// Attacher les observateurs au sujet
$publisher->attach($emailSubscriber);

// Publication d'un article
$publisher->publishArticle("Observer Design Pattern en PHP");
