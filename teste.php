<!DOCTYPE html>
<html>

<head>
    <title>Player de Áudio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <style>
        .audio-player {
            background-color: #fff;
            width: 1000px;
            padding: 20px;

            border-radius: 5px;
        }

        .info-player {
            display: flex;
            flex-direction: row;
        }

        .desc-musica {
            display: flex;
            flex-direction: column;
            margin-left: 10px;
        }

        .controls {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .reproducao {
            margin-left: 50%;
        }


        .play-button,
        .volume-button {
            padding: 5px;
            border-radius: 3px;
            border: none;
            background-color: #fff;
            cursor: pointer;
            font-size: 25px;
        }

        .skip-button {
            border: none;
            background-color: #fff;
            font-size: 20px;
        }


        .cover {
            width: 20%;
            object-fit: cover;
        }

        .cover .cover-img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            border: solid 2px;
            object-fit: cover;
        }

        .volume-slider {
            width: 100px;
        }

        .progress-bar {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .timer,
        .total-time {
            font-size: 12px;
        }

        .desc-musica {
            margin-top: 100px;
        }

        .nome-musica p {
            margin-top: 0px;
            font-size: 35px;
            margin-bottom: 0px;

        }

        .autor p {

            font-size: 20px;
        }

        .time-bar {
            border-radius: 5px;
            flex-grow: 1;
            height: 8px;
            background-color: #fff;
            margin: 0 10px;
            position: relative;
        }

        .time-fill {
            border-radius: 5px;
            height: 100%;
            background-color: #000;
            width: 0;
            transition: width 0.2s ease-in-out;
        }
    </style>
    <div class="audio-player">
        <div class="info-player">
            <div class="cover">
                <img class="cover-img" src="teste/teste2.jpg">
            </div>
            <div class="desc-musica">
                <div class="autor">
                    <p>Kanye West</p>
                </div>
                <div class="nome-musica">
                    <p>Esqueci</p>
                </div>
            </div>
        </div>
        <div class="controls">
            <div class="reproducao">
                <button class="skip-button" onclick="skipBackward()"><i class="fas fa-backward"></i></button>
                <button class="play-button" onclick="toggleAudio()"><i class="fas fa-play"></i></button>
                <button class="skip-button" onclick="skipForward()"><i class="fas fa-forward"></i></button>
            </div>
            <div class="volume">
                <button class="volume-button" onclick="toggleMute()"><i class="fas fa-volume-up"></i></button>

            </div>
        </div>
        <div class="progress-bar" onclick="seek(event)">
            <div class="timer">00:00</div>
            <div class="time-bar">
                <div class="time-fill"></div>
            </div>
            <div class="total-time">00:00</div>
        </div>
        <audio id="audio" src="teste/teste.mp3"></audio>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        var audio = document.getElementById('audio');
        var playButton = document.querySelector('.play-button');
        var volumeButton = document.querySelector('.volume-button');
        var volumeSlider = document.querySelector('.volume-slider');
        var timer = document.querySelector('.timer');
        var totalTime = document.querySelector('.total-time');
        var timeFill = document.querySelector('.time-fill');
        var progressBar = document.querySelector('.progress-bar');


        function toggleAudio() {
            if (audio.paused) {
                audio.play();
                playButton.innerHTML = '<i class="fas fa-pause"></i>';
            } else {
                audio.pause();
                playButton.innerHTML = '<i class="fas fa-play"></i>';
            }
        }

        function toggleMute() {
            if (audio.muted) {
                audio.muted = false;
                volumeButton.innerHTML = '<i class="fas fa-volume-up"></i>';
            } else {
                audio.muted = true;
                volumeButton.innerHTML = '<i class="fas fa-volume-mute"></i>';
            }
        }

        function adjustVolume(volume) {
            audio.volume = volume;
        }

        audio.addEventListener('timeupdate', function() {
            var position = audio.currentTime / audio.duration;
            timeFill.style.width = (position * 100) + '%';

            var minutes = Math.floor(audio.currentTime / 60);
            var seconds = Math.floor(audio.currentTime % 60);
            timer.textContent = padTime(minutes) + ':' + padTime(seconds);
        });

        audio.addEventListener('loadedmetadata', function() {
            var minutes = Math.floor(audio.duration / 60);
            var seconds = Math.floor(audio.duration % 60);
            totalTime.textContent = padTime(minutes) + ':' + padTime(seconds);
        });

        function padTime(time) {
            return (time < 10 ? '0' : '') + time;
        }

        function seek(event) {
            var progressWidth = progressBar.clientWidth;
            var clickX = event.clientX - progressBar.getBoundingClientRect().left;
            var positionPercentage = clickX / progressWidth;
            var seekTime = positionPercentage * audio.duration;

            audio.currentTime = seekTime;
        }

        function skipForward() {
            audio.currentTime += 10;
        }

        function skipBackward() {
            audio.currentTime -= 10;
        }
    </script>
</body>

</html>