<?php

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Language;

$userListInput = [
    [
        "username" => "Karl",
        "language" => "en"
    ], [
        "username" => "Tam",
        "language" => "vi"
    ], [
        "username" => "Kazuki",
        "language" => "ja"
    ]
    
];
function getNameMessage ($username,$userListInput){
$message = '';
foreach ($userListInput as $user){
if($username === $user['username']){
    if($user['language'] ==='vi'){
        $message = 'xin chao'.$username;
    }elseif($user['language'] ==='en'){
        $message = 'hello'.$username;
    }elseif($user['language'] ==='ja'){
        $message = 'konichiwa'.$username;
    }
}
}
return $message;
}
echo getNameMessage('Tam', $userListInput)


?>