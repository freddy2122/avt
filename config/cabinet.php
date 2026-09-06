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

    /*
     | Domaines d'expertise : alimentent le sous-menu « Compétences » du header
     | et les cartes de la section « Mes compétences ».
     */
    'expertises' => [
        [
            'titre' => 'Droit commercial',
            'icone' => 'institution',
            'texte' => "Interventions en droit commercial : cession de fonds, litiges commerciaux, rédaction d'actes, CGV…",
            'url' => '#droit-commercial',
        ],
        [
            'titre' => 'Droit des sociétés',
            'icone' => 'contrat',
            'texte' => "Création de sociétés, rédaction de statuts, pactes d'actionnaires, conflits entre associés…",
            'url' => '#droit-societes',
        ],
        [
            'titre' => 'Bail commercial',
            'icone' => 'mallette',
            'texte' => 'Rédaction et renouvellement de baux, négociation de clauses, gestion des litiges…',
            'url' => '#bail-commercial',
        ],
        [
            'titre' => 'Contentieux URSSAF',
            'icone' => 'balance',
            'texte' => 'Contestation des redressements URSSAF, défense devant les juridictions et négociations…',
            'url' => '#contentieux-urssaf',
        ],
        [
            'titre' => 'Succession',
            'icone' => 'succession',
            'texte' => "Règlement de successions, partage entre héritiers, donations et transmission d'entreprise familiale…",
            'url' => '#succession',
        ],
    ],

    // Section « Pourquoi choisir … ? »
    'atouts' => [
        ['titre' => 'Sécurité',     'icone' => 'medaille', 'texte' => 'Dans vos dossiers'],
        ['titre' => 'Transparence', 'icone' => 'loupe',    'texte' => 'Sur les honoraires'],
        ['titre' => 'Réactivité',   'icone' => 'chrono',   'texte' => 'Pour répondre à vos besoins'],
        ['titre' => 'Couverture',   'icone' => 'france',   'texte' => 'En présentiel et distanciel'],
    ],

    // Carrousel « Mes différents accompagnements »
    'accompagnements' => [
        [
            'titre' => "Pacte d'actionnaires",
            'icone' => 'groupe',
            'texte' => 'Élaboration de pactes adaptés à votre situation pour sécuriser les relations entre associés et prévenir les litiges.',
        ],
        [
            'titre' => "Création d'entreprise",
            'icone' => 'signature',
            'texte' => 'Choix de la forme juridique, rédaction des statuts et immatriculation de vos premiers actes.',
        ],
        [
            'titre' => 'Recouvrement de créances',
            'icone' => 'billets',
            'texte' => 'Mise en demeure, négociation et procédures judiciaires pour obtenir le paiement de vos créances.',
        ],
        [
            'titre' => 'Cession de fonds de commerce',
            'icone' => 'cession',
            'texte' => "Audit préalable, rédaction de l'acte de cession et accompagnement jusqu'au versement du prix.",
        ],
        [
            'titre' => 'Règlement de succession',
            'icone' => 'succession',
            'texte' => "Ouverture, partage et transmission du patrimoine, y compris la transmission d'une entreprise familiale.",
        ],
    ],

    // Section « Un cabinet digitalisé et en présentiel »
    'avantages_digital' => [
        ['titre' => 'Flexibilité',   'icone' => 'calendrier', 'texte' => 'Des rendez-vous adaptés à votre emploi du temps.'],
        ['titre' => 'Efficacité',    'icone' => 'conseil',    'texte' => 'Une gestion fluide et sécurisée de vos dossiers.'],
        ['titre' => 'Accessibilité', 'icone' => 'carte',      'texte' => 'Un accompagnement juridique partout en France.'],
    ],

    // Questions fréquemment posées (la première est ouverte par défaut)
    'faq' => [
        [
            'question' => 'Comment consulter rapidement une avocate en droit des affaires ?',
            'reponse' => 'Vous pouvez réserver directement en ligne ou contacter le cabinet par téléphone pour une consultation. Rencontrez Maître Daniela Didonno à Paris ou en visioconférence.',
        ],
        [
            'question' => "Quelle est la différence entre un juriste d'entreprise et une avocate en droit des affaires ?",
            'reponse' => "Le juriste d'entreprise conseille son employeur en interne. L'avocate est indépendante, soumise au secret professionnel, et peut vous représenter et plaider devant les juridictions.",
        ],
        [
            'question' => "Quelle est la mission d'une avocate en droit des affaires ?",
            'reponse' => 'Elle sécurise vos opérations (statuts, contrats, cessions), vous conseille au quotidien et vous défend en cas de litige devant les tribunaux compétents.',
        ],
        [
            'question' => "Quels sont les domaines d'expertise du cabinet ?",
            'reponse' => 'Droit commercial, droit des sociétés, baux commerciaux, contentieux URSSAF et successions, sur Paris et dans toute la France.',
        ],
        [
            'question' => "Quels sont les honoraires d'une avocate en droit des affaires ?",
            'reponse' => "Les honoraires sont fixés à l'avance dans une convention : forfait pour une prestation définie, taux horaire pour un accompagnement, ou abonnement pour un suivi régulier.",
        ],
    ],
];
