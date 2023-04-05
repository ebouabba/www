<?php
$html1 = "

<!DOCTYPE html>
<html>

<head>
    <title>COOKIES</title>
    <link rel='stylesheet' type='text/css' href='../STYLE/styleCookies.css'>
</head>

<body>
    <div class='main'>
        <div class='navbar'>
            <div class='icon'>
                <a href='../index.html'>
                    <h2 class='logo'>WEBSERV</h2>
                </a>
            </div>
            <div class='menu'>
                <ul>
                    <li><a href='../index.html'>HOME</a></li>
                    <li><a href='../FOUNDERS/founders.html'>FOUNDERS</a></li>
                    <li><a href='../SERVIES/servies.html'>SERVIES</a></li>
                    <li><a href='../COOKIES/cookies.html'>COOKIES</a></li>
                    <li><a href='../CGI/cgi.html'>CGI</a></li>
                </ul>
            </div>
            </div>
            <div class='container'>
            <h4>Cookies is Geting</h4>
            </div>
            </div>
</body>

</html>";

$html2 = "

<!DOCTYPE html>
<html>

<head>
    <title>COOKIES</title>
    <link rel='stylesheet' type='text/css' href='../STYLE/styleCookies.css'>
</head>

<body>
    <div class='main'>
        <div class='navbar'>
            <div class='icon'>
                <a href='../index.html'>
                    <h2 class='logo'>WEBSERV</h2>
                </a>
            </div>
            <div class='menu'>
                <ul>
                    <li><a href='../index.html'>HOME</a></li>
                    <li><a href='../FOUNDERS/founders.html'>FOUNDERS</a></li>
                    <li><a href='../SERVIES/servies.html'>SERVIES</a></li>
                    <li><a href='../COOKIES/cookies.html'>COOKIES</a></li>
                    <li><a href='../CGI/cgi.html'>CGI</a></li>
                </ul>
            </div>
            </div>
            <div class='container'>
            <h4>Cookies is Not Geting</h4>
            </div>
            </div>
</body>

</html>";

header("Centent-type: text/html");
$env_var = getenv('NAME');
$env_var = getenv('VALUE');

if ($env_var !== false && $env_var !== '') {
    setcookie($_ENV['NAME'], $_ENV['VALUE'], time() + 60,  "/" ,"localhost");
    echo $html1;
    } 
else {
    echo $html2;
}
?>