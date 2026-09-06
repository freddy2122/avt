<?php

/*
|--------------------------------------------------------------------------
| Identité et contenu du cabinet
|--------------------------------------------------------------------------
|
| Un seul endroit à modifier pour le nom, les compétences et les accroches
| affichés dans le header, la bannière et les sections de la page d'accueil.
|
*/

return [
    'nom' => 'Maître Daniela DIDONNO',

    // Variante utilisée à l'intérieur des phrases
    'nom_texte' => 'Maître Daniela Didonno',

    // Initiales affichées dans le logo
    'initiales' => 'DD',

    // Mention sous les initiales du logo
    'mention' => 'Avocate',

    'titre' => 'Avocate en droit des affaires à Paris',

    'accroche' => 'Cabinet physique et digitalisé dans toute la France',

    'barreau' => 'Barreau de Paris',

    'meta_description' => 'Maître Daniela Didonno, avocate en droit des affaires à Paris. Cabinet physique et digitalisé dans toute la France.',

    /*
     | Compétences : alimentent à la fois le sous-menu « Compétences » du
     | header et le bandeau situé sous la bannière. La clé « icone »
     | correspond à un cas du composant <x-icon />.
     */
    'competences' => [
        ['label' => 'Bail commercial',       'icone' => 'signature', 'url' => '#bail-commercial'],
        ['label' => 'Rédaction de contrats', 'icone' => 'contrat',   'url' => '#redaction-contrats'],
        ["label" => "Cession d'entreprise",  'icone' => 'cession',   'url' => '#cession-entreprise'],
        ['label' => 'Conseil juridique',     'icone' => 'conseil',   'url' => '#conseil-juridique'],
    ],

    // Modes de rendez-vous listés dans la section « À propos »
    'rendez_vous' => [
        ['label' => 'Directement dans son cabinet sur Paris', 'icone' => 'eiffel'],
        ['label' => 'En visioconférence dans toute la France', 'icone' => 'visio'],
    ],
];
