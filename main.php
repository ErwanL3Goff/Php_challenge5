<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

$stevensonWeapon = '???';

if ($opponentWeapon ==='fists') {
    $stevensonWeapon = 'gun';
}elseif ($opponentWeapon === 'gun') {
    $stevensonWeapon = 'whip';
}elseif ($opponentWeapon === 'whip') {
    $stevensonWeapon = 'fists';
}else {
    $stevensonWeapon = 'wip';
}


echo "L'opposant choisit : $opponentWeapon\n";
echo "Steven choisit : $stevensonWeapon\n";