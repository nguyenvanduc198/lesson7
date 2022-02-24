<?php


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

// Check username with username in the list
// If match, return a welcome message following the language of that user
// inside the data in the list.




function selectWelcomMessage($username, $language)
{
    $welcomeMessageInput = [
        "en" => "Hello ",
        "vi" => "Xin chao ",
        "ja" => "Konnichiwa "
    ];
    $welcomeMessage = $welcomeMessageInput[$language];
    return $welcomeMessage . " " . $username;
}

function getWelcomeMessage($username, $userList)
{

    foreach ($userList as $user) {
        if ($username === $user["username"]) {
            return selectWelcomMessage($username, $user["language"]);
        }
    }

    return "";
}

echo getWelcomeMessage("Kazuki", $userListInput) . "<br>"; // => Konnichiwa Kazuki

?>
<!-- <br>
<br>
<br> -->