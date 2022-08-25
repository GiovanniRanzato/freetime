<?php 

$formFields = [
    array(
        "type" => "text",
        "name" => "name",
        "label" => "Nome film",
        "placeholder" => "Indiana Jones e l'ultima crociata",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "text",
        "name" => "director",
        "label" => "Regista",
        "placeholder" => "Steven Spielberg",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "text",
        "name" => "actors",
        "label" => "Attori principali",
        "placeholder" => "Harrison Ford, Sean Connery, ...",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "text",
        "name" => "duration",
        "label" => "Durata",
        "placeholder" => "120 min",
        "value" => "",
        "required" => true,
    ),
    array(
        "type" => "description",
        "label" => "Genere",
    ),
    array(
        "type" => "checkboxgroup",
        "name" => "genere",
        "value" => "commedia",
        "label" => "Commedia",
    ),
    array(
        "type" => "checkboxgroup",
        "name" => "genere",
        "value" => "Thriller",
        "label" => "thriller",
    ),
    array(
        "type" => "checkboxgroup",
        "name" => "genere",
        "value" => "horror",
        "label" => "Horror",
    ),
    array(
        "type" => "checkboxgroup",
        "name" => "genere",
        "value" => "drammatico",
        "label" => "Drammatico",
    ),
    array(
        "type" => "checkboxgroup",
        "name" => "genere",
        "value" => "storico",
        "label" => "Storico",
    ),
    // array(
    //     "type" => "email",
    //     "name" => "email",
    //     "label" => "Email",
    //     "placeholder" => "severus@piton.com",
    //     "value" => "",
    //     "required" => true,
    // ),
    // array(
    //     "type" => "text",
    //     "name" => "city",
    //     "label" => "Città",
    //     "placeholder" => "Hogwarts",
    //     "value" => "",
    //     "required" => true,
    // ),
    // array(
    //     "type" => "tel",
    //     "name" => "phone",
    //     "label" => "Telefono",
    //     "placeholder" => "+39 123456789",
    //     "required" => true,
    // ),
]

?>