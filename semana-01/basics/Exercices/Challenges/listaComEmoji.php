<!-- 🧠 Desafio 11: Mapear Lista de Frutas com Emoji

    Dado um array de frutas (banana, maçã, laranja), use array_map para adicionar um emoji ao lado de cada fruta.

    Resultado final: banana 🍌, maçã 🍎, etc. -->

<?php

$frutas = ["banana", "maçã", "laranja"];

function insertEmojis($fruta) {
    if ($fruta == "banana") {
        return "banana 🍌";
    }
    if ($fruta == "maçã") {
        return "maçã 🍎";
    }
    if ($fruta == "laranja") {
        return "laranja 🍊";
    }

    return $fruta;
}

$frutasComEmojis = array_map("insertEmojis", $frutas);

print_r($frutasComEmojis);
