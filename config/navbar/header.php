<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter kopplade till Design-kursen.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgschema",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport Färgschema Kmom04",
                    ],
                    [
                        "text" => "Laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport Laddningstid Kmom05",
                    ],
                    [
                        "text" => "Designprincip",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport Designprincip Kmom06",
                    ],
                    [
                        "text" => "Designelement",
                        "url" => "rapport/designelement",
                        "title" => "Designelement (tema)",
                    ],
                    [
                        "text" => "Designprinciper",
                        "url" => "rapport/designprinciper",
                        "title" => "Designprinciper (tema)",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Dagens bild",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Semester!",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Semester!",
                    ],
                    [
                        "text" => "Jobba, jobba, jobba",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Jobba, jobba, jobba",
                    ],
                    [
                        "text" => "Mmm...tårta!",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Mmm...tårta!",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "En testsida för att redigera Markdown.",
        ],
    ],
];
