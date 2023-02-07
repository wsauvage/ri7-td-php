<?php

$tableaux = [
    'infos' => [
        'nom' => 'Pesto',
        'prenom' => 'Julia',
        'age' => 30
    ],
    'films' => [
        'action' => ['Piège de cristal', 'Mad Max', 'Terminator', 'Matrix'],
        'comédie' => ['Brice de Nice', 'Les Visiteurs', 'Le Dîner de cons', 'Neuilly sa mère !'],
    ],
];

foreach($tableaux['infos'] as $key => $item) {
    echo "<div>$key : $item</div>";
}

foreach($tableaux['films']['action'] as $item) {
    echo "<div>action : $item</div>";
}

foreach($tableaux['films']['comédie'] as $item) {
    echo "<div>comédie : $item</div>";
}