<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>
        Paper corner fold effect on hover
        by using HTML and CSS
    </title>
    <style>
        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <button id="meuBotao"><img src="assets/img/teste1.png"></button>
    <script>
        var meuBotao = document.getElementById("meuBotao");
        var estadoBotao = localStorage.getItem("estadoBotao"); // lê o estado armazenado

        if (estadoBotao === "ligado") {
            meuBotao.innerHTML = '<img src="assets/img/teste1.png">';
        }

        meuBotao.addEventListener("click", function() {
            meuBotao.innerHTML = '<img src="assets/img/teste2.png">';
            localStorage.setItem("estadoBotao", "ligado"); // armazena o estado
            setTimeout(function() {
                // código para enviar informação ao banco de dados usando AJAX
                location.reload();
            }, 3000); // 3 segundos de atraso
        });
    </script>


</body>

</html>