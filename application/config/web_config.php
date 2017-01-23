<?php

/*
 * -------------------------------------------------
 * FICHERO DE CONFIGURACION WEB
 * -------------------------------------------------
 * 
 * En este fichero se encuentra la configuracion por pagina web o peticion.
 * 
 */


$web_config = [
    #      ---------------
    # CONFIGURACION POR DEFECTO
    #      ---------------

    "default" => [
        "title" => "Subs Stats",
        "title_separator" => " | ",
        "metas" => [
            "robots" => "INDEX, NOFOLLOW",
            "description" => "Apliación creada para youtubers destinada a la generación de informes sobre sus suscriptores, recuperar la liga, los campeones que más utilizan, etc",
            "author" => "Xavicrak / hexania",
            "language" => "es",
            "keywords" => "Suscriptores Stats, substats.com, subs stats",
            "viewport" => "width=device-width, initial-scale=1, maximum-scale=1",
        ],
        "css" => [
            "/assets/css/main-kit.css",
        ],
        "scripts" => [
            "/assets/js/main-kit.js",
        ],
    ],
];



// Añadimos aquí la configuracion anterior al $config de la aplicacion
$config["web_config"] = $web_config;
