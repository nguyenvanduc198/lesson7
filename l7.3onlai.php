<?php
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
echo getWelcomeMessage("Tam", $userListInput) . "<br>"; // => Xin chao Tam
echo getWelcomeMessage("XXX", $userListInput) . "<br>"; // => 
echo getWelcomeMessage("Karl", $userListInput) . "<br>";

?>