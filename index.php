<?php
echo ("<h1>hello world</h1>");
$x = 0;
$message = 0;

$message = ("<p>with for</p>");
$message .= ("<ul>");

for($x = 17827; $x >= 14568; $x -= 7)
{
    if($x % 24 == 0)
    {
        $message .= ("<li>" . $x . "</li>");
    }
}

$message .= ("</ul>");
$message .= ("<p>with while</p>");
$message .= ("<ul>");

$x = 17827;
while($x >= 14568) {
    if($x % 24 == 0)
    {
        $message .= ("<li>" . $x . "</li>");
    }
    $x -= 7;
}

$message .= "</ul>";
echo $message;