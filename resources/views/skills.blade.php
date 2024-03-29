<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>
</head>
<body>
    <style>
        .skill {
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

.skill:after {
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

.skill:main, .skill:focus {
 user-select: auto;
}

.skill:hover:not(:disabled) {
 filter: brightness(1.1);
}

.skill:disabled {
 cursor: auto;
}

.skill:active:after {
 border-width: 0 0 0px;
}

.skill:active {
 padding-bottom: 10px;
}
.skill a{
    text-decoration: none;
    color: white;
}
    </style>
<button class="skill"><a href="{{ route('about_me')}}">About Me</a></button>
<button class="skill"><a href="{{ route('hobbies')}}">Hobbies</a></button>
<button class="skill"><a href="{{ route('skills')}}">Skills</a></button>

<h1>My Skills are</h1>
@foreach($skills as $skill)
<ul>
    <li>
        {{$skill}}
    </li>
    @endforeach
</ul>
</body>
</html>