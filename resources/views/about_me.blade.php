<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
</head>
<body>
    <style>
        .about {
 appearance: button;
 background-color: #1899D6;
 border: solid transparent;
 border-radius: 16px;
 border-width: 0 0 4px;
 box-sizing: border-box;
 color: #FFFFFF;
 cursor: pointer;
 display: inline-block;
 font-size: 15px;
 font-weight: 700;
 letter-spacing: .8px;
 line-height: 20px;
 margin: 0;
 outline: none;
 overflow: visible;
 padding: 13px 19px;
 text-align: center;
 text-transform: uppercase;
 touch-action: manipulation;
 transform: translateZ(0);
 transition: filter .2s;
 user-select: none;
 -webkit-user-select: none;
 vertical-align: middle;
 white-space: nowrap;
}

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

     <h1>Aq lang itu si {{name}}</h1>


   
    
</body>
</html>