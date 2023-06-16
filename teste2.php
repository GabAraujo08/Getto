<!DOCTYPE html>
<html>

<head>
    <title>Player de Áudio</title>
    <style>
        #player {
            width: 300px;
        }
    </style>
</head>

<body>
    <style>
        /* Estilo geral do player de vídeo */
        #player {
            width: 640px;
        }

        /* Estilize a barra de controle */
        #player::-webkit-media-controls {
            background-color: rgba(0, 0, 0, 0.9);
        }

        /* Estilize o botão de reprodução */
        #player::-webkit-media-controls-play-button {
            background-color: transparent;
            background-image: url('caminho/para/o/icone-de-play.png');
            background-repeat: no-repeat;
            background-position: center;
            border: none;
            width: 50px;
            height: 50px;
        }

        /* Estilize a barra de progresso */
        #player::-webkit-media-controls-timeline {
            background-color: #333;
            height: 4px;
            margin-top: 15px;
        }

        /* Estilize o indicador de progresso */
        #player::-webkit-media-controls-current-time-display,
        #player::-webkit-media-controls-time-remaining-display {
            color: #fff;
            font-size: 12px;
            font-family: Arial, sans-serif;
            margin: 0 10px;
        }

        /* Estilize o botão de volume */
        #player::-webkit-media-controls-volume-slider {
            width: 80px;
        }

        /* Estilize o controle de volume */
        #player::-webkit-media-controls-volume-slider-container {
            margin-right: 10px;
        }

        /* Estilize o botão de tela cheia */
        #player::-webkit-media-controls-fullscreen-button {
            background-color: transparent;
            background-image: url('caminho/para/o/icone-de-tela-cheia.png');
            background-repeat: no-repeat;
            background-position: center;
            border: none;
            width: 30px;
            height: 30px;
            margin-left: 10px;
        }
    </style>
    <div class="audio-player">
    <div class="controls">
      <button class="play-button" onclick="toggleAudio()">Play/Pause</button>
      <button class="volume-button" onclick="toggleMute()">Mute/Unmute</button>
      <input type="range" class="volume-slider" min="0" max="1" step="0.1" value="1" onchange="adjustVolume(this.value)">
    </div>
    <div class="progress-bar">
      <div class="timer">00:00</div>
      <div class="time-bar">
        <div class="time-fill"></div>
      </div>
      <div class="total-time">00:00</div>
    </div>
    <audio id="audio" src="caminho/do/arquivo.mp3"></audio>
  </div>

    <script src="script.js"></script>
</body>

</html>