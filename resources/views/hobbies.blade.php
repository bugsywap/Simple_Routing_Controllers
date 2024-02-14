<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hobbies</title>
</head>
<body>
    <style>
        .about:after {
 background-clip: padding-box;
 background-color: #1CB0F6;
 border: solid transparent;
 border-radius: 16px;
 border-width: 0 0 4px;
 bottom: -4px;
 content: "";
 left: 0;
 position: absolute;
 right: 0;
 top: 0;
 z-index: -1;
}

.about:main, .about:focus {
 user-select: auto;
}

.about:hover:not(:disabled) {
 filter: brightness(1.1);
}

.about:disabled {
 cursor: auto;
}

.about:active:after {
 border-width: 0 0 0px;
}

.about:active {
 padding-bottom: 10px;
}
.about a{
    text-decoration: none;
    color: white;
}
    </style>
    <button class="about"><a href="/about_me">About Me</a></button>
    <button class="about"><a href="/hobbies">Hobbies</a></button>
    <button class="about"><a href="/skills">Skills</a></button>

</body>
</html>
