<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/escolhaTags.css">




</head>

<body>

    <div class="container-fluid">
        <div class="header">
            <h1>O que você gostaria de acompanhar na plataforma?</h1>
            <p id="categoriasSelecionadas">0 categorias selecionadas</p>

        </div>
        <div class="main">

            <form action="#">
                <div class="categorias">


                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    <div class="categoria" tabindex="0">
                        Hip hop
                        <input type="checkbox" value="hiphop">
                    </div>

                    

                   

                   

                </div>

                <button type="submit" btn btn-primary btn-enviar>Enviar</button>
            </form>
        </div>
    </div>






    <script>
        const categorias = document.querySelectorAll('.categorias .categoria');
        const pCategoriasSelecionadas = document.getElementById('categoriasSelecionadas');

        categorias.forEach(categoria => {
            categoria.addEventListener('click', () => {
                const checkbox = categoria.querySelector('input[type="checkbox"]');
                checkbox.checked = !checkbox.checked;
                categoria.classList.toggle('selected');

                if (categoria.classList.contains('selected')) {
                    categoria.focus();
                } else {
                    categoria.blur();
                }

                atualizarCategoriasSelecionadas();
            });
        });

        function atualizarCategoriasSelecionadas() {
            const categoriasSelecionadas = document.querySelectorAll('.categorias .categoria.selected');
            pCategoriasSelecionadas.textContent = `${categoriasSelecionadas.length} categorias selecionadas`;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b8f56ddd91.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script> -->




</body>

</html>