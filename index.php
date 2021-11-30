<?php
$users = ["Juili", "Norhen","Natasha", "Enfel"];
 
$countUsers = count($users);
$rest = $countUsers - 1;

/*if ($countUsers === 0) {
    echo "Soyez le premier à aimer cette publication";
} elseif ($countUsers === 1) {
    echo "$users[0] likes this post"; 
} elseif ($countUsers === 2) {
    echo "$users[0] and $users[1] like this post";
} else {
    $firstName = $users[rand(0, $rest)];
    echo "$firstName et $rest autres personnes ont aimé cette publication";
}*/

switch($countUsers){
    case 0:
        echo "Soyez le premier à aimer cette publication";
        break;
    case 1:
        echo "$users[0] likes this post";
        break;
    case 2:
        echo "$users[0] and $users[1] like this post";
        break;
    default:
        $firstName = $users[rand(0, $rest)];
        echo "$firstName et $rest autres personnes ont aimé cette publication";
        break;
}
