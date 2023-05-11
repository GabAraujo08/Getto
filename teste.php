<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>
        Paper corner fold effect on hover
        by using HTML and CSS
    </title>
    <style>
        h1 {
            color: green;
        }

        .Fold {
            position: absolute;
            left: 50%;
            top: 55%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 200px;
            background-color: #4EE73C;
        }

        h3 {
            margin: 20px;
            padding: 20px;
        }

        .Fold:after {
            position: absolute;
            content: '';
            right: 0;
            top: 0;
            transition-duration: 1s;
            border-bottom: 50px solid black;
            border-right: 50px solid white;
        }

        .Fold:after {
            transition-duration: 1s;
            border-bottom: 50px solid black;
            border-right: 50px solid white;
        }

        .card {
            position: relative;
            width: 160px;
            height: 100px;
            border-radius: 20px;
        }

        .card .front:after{
            position: absolute;
            content: '';
            right: 0;
            top: 0;
            border-bottom: 20px solid black;
            border-right: 20px solid white;
        }

        .card div {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            backface-visibility: hidden;
            transition: 1s;
        }

        .card .front {
            background: #664187;
            transform: perspective(500px) rotateY(0deg);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
        }

        .card .back {
            background: #9056E8;
            transform: perspective(500px) rotateY(180deg);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
        }


        .card:hover .front {
            transform: perspective(100px) rotateY(180deg);
        }

        .card:hover .back {
            transform: perspective(100px) rotateY(360deg);
        }

        .card div p {
            font-family: 'InterRegular';
            font-style: normal;
            font-weight: 600;
            font-size: 26px;
            color: #FFFFFF;
        }

        .card div span {
            font-family: 'InterRegular';
            font-style: normal;
            font-weight: 600;
            font-size: 26px;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <center>
        <h1>
            GeeksforGeeks
        </h1>
        <b>
            Paper corner fold effect on hover
            by using HTML and CSS
        </b>
        <div class="Fold">
            <h3>A Computer Science Portal for Geeks</h3>
        </div>
        <div class="card">
            <div class="front">
                <p>11</p><span>Abr</span>
            </div>
            <div class="back">
                <p>12</p><span>AM</span>
            </div>
        </div>
    </center>
</body>

</html>