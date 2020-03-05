<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--jQuery cdn-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!--fonts-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }
        .opensanas{
            font-family: "Open Sans";
        }

        body {
            font: 15px / 1.6 "Montserrat", sans-serif;
            color: rgb(92, 94, 118);
        }

        .content-wrapper {
            background: #f5f5f6;
            height: 100%;
        }

        #nav-mobile {
            position: relative;
            right: 100px;
        }

        nav .brand-logo {
            padding-left: 15px;
        }

        nav {
            background: #667db6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .page-footer {
            background: #667db6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .btn-footer {
            background: #7F00FF;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #E100FF, #7F00FF);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #E100FF, #7F00FF);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            border-radius: 20px;
        }

        .ftr-flt-btn {
            background: #642B73;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #C6426E, #642B73);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #C6426E, #642B73);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        a.active {
            background-color: rgba(38, 198, 218, 0.5);
        }

        .noUi-touch-area {
            cursor: pointer;
        }

        .input-field.input-outlined>input {
            border: 2px solid #eee;
            width: calc(100% - 2.5rem);
            float: none;
            display: block;
            border-radius: 4px;
            -webkit-transition: box-shadow, border-color 0.15s;
            transition: box-shadow, border-color 0.15s;
        }

        .input-field.input-outlined>input {
            border: 2px solid #eee;
            padding-left: 10px;
            padding-right: 10px;
            width: calc(100% - 2.5rem);
            float: none;
            display: block;
            border-radius: 4px;
            -webkit-transition: box-shadow, border-color 0.15s;
            transition: box-shadow, border-color 0.15s;
        }

        .input-field.input-outlined>input:focus:not([readonly]) {
            border-color: #4a148c;
            box-shadow: 0 1px 0 0px #4a148c;
        }

        .input-field.input-outlined>label {
            left: 27px;
            display: -webkit-inline-box;
            display: inline-flex;
            width: auto !important;
        }

        .input-field.input-outlined>label.active {
            color: #4a148c !important;
            background: white;
            border-left: 4px solid white;
            border-right: 4px solid white;
            -webkit-transform: translateY(-1.75rem);
            transform: translateY(-1.75rem);
            top: 1rem;
        }

        .input-field .prefix.active {
            color: #4a148c
        }

        .material-icons {
            display: inline-flex;
            vertical-align: top;
        }

        /* carousel start style*/
        .slider,
        .slider>div {
            /* Images default to Center Center. Maybe try 'center top'? */
            background-position: center top;
            display: block;
            width: 100%;
            height: 80vh;
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #000;
            -moz-transition: transform .9s;
            -o-transition: transform .9s;
            -webkit-transition: transform .9s;
            transition: transform .9s;
            overflow: hidden
        }

        .slider>div {
            position: absolute;
        }

        .slider img {
            width: 100%;
            height: 100vh;
        }

        .slider>i {
            color: #5bbd72;
            position: absolute;
            font-size: 60px;
            margin: 20px;
            top: 40%;
            text-shadow: 0 10px 2px #223422;
            transition: .3s;
            width: 30px;
            padding: 10px 13px;
            background: #fff;
            background: rgba(255, 255, 255, .3);
            cursor: pointer;
            line-height: 0;
            box-sizing: content-box;
            border-radius: 3px;
            z-index: 4;
        }

        .slider>i svg {
            margin-top: 3px;
        }

        .slider>.left {
            left: -100px;
        }

        .slider>.right {
            right: -100px;
        }

        .slider:hover>.left {
            left: 0;
        }

        .slider:hover>.right {
            right: 0;
        }

        .slider>i:hover {
            background: #fff;
            background: rgba(255, 255, 255, .8);
            transform: translateX(-2px);
        }

        .slider>i.right:hover {
            transform: translateX(2px);
        }

        .slider>i.right:active,
        .slider>i.left:active {
            transform: translateY(1px);
        }

        .slider:hover>div {
            transform: scale(1.01);
        }

        .hoverZoomOff:hover>div {
            transform: scale(1);
        }

        .slider>ul {
            position: absolute;
            bottom: 10px;
            left: 50%;
            z-index: 4;
            padding: 0;
            margin: 0;
            transform: translateX(-50%);
        }

        .slider>ul>li {
            padding: 0;
            width: 20px;
            height: 5px;
            border-radius: 30%;
            list-style: none;
            float: left;
            margin: 10px 10px 0;
            cursor: pointer;
            background: #fff;
            -moz-transition: .3s;
            -o-transition: .3s;
            -webkit-transition: .3s;
            transition: .3s;
        }

        .slider>ul>.showli {
            background-color: #000;
            -moz-animation: boing .5s forwards;
            -o-animation: boing .5s forwards;
            -webkit-animation: boing .5s forwards;
            animation: boing .5s forwards;
        }

        .slider>ul>li:hover {
            transition: 0.9s ease-in;
            border: 1px solid #000;
        }

        .slider>.show {
            z-index: 1;
        }


        .showArrows>.left {
            left: 0;
        }

        .showArrows>.right {
            right: 0;
        }

        .slider:hover .titleBar,
        .slider:hover .titleBar * {
            transform: translate(0);
            opacity: 1;
        }

        .titleBarTop .titleBar {
            top: 0;
            bottom: initial;
            transform: translateY(-100%);
        }

        .slider>div span {
            display: block;
            background: rgba(0, 0, 0, .5);
            position: absolute;
            bottom: 0;
            color: #fff;
            text-align: center;
            padding: 0;
            width: 100%;
        }
        @media(max-width: 500px){
            #col1-acs{
                padding: 0;
            }
        }
    </style>
</head>

<body>

</body>

</html>