<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffdab9;
            padding: 20px;
            color: #030202;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-top: 20px; /* Ajusta la separación entre el mensaje y la cuadrícula */
        }

        .grid-square {
            border: 2px solid #1a1a1a;
            border-radius: 10px;
            width: 100px;
            /* Ancho fijo */
            height: 100px;
            /* Alto fijo */
            text-align: center;
            background-color: #ffdab9;
        }

        .message-container {
            margin-bottom: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .message-div {
            border: 2px solid #1a1a1a;
            border-radius: 10px;
            width: 100px;
            /* Ancho fijo */
            height: 100px;
            /* Alto fijo */
            text-align: center;
            margin-bottom: 20px;
            font-size: 60px; /* Ajusta el tamaño del texto */
            background-color: #ffdab9;
        }

        .bg-warm {
            background-color: #ffdab9;
        }

        /* Estilo para el pop-up */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 2px solid #1a1a1a;
            border-radius: 10px;
            z-index: 999;
        }

        /* Fondo oscuro detrás del pop-up */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
        }

        .letras{
            font-size: 60px; /* Ajusta el tamaño del texto */
        }
        /* Estilo para el botón de instrucciones */
        #instructionsButton {
            margin-top: 20px;
        }
    </style>
    <title>SQWORD</title>
</head>

<body>
    <div class="container text-center">
        <h1 class="mb-4" style="height: 5px">SQWORD</h1>
        <div class="bg-warm p-4 d-flex justify-content-center align-items-center flex-column">
            <!-- Message Container -->
            <div class="message-container">
                <h2>Següent paraula:</h2>
                <div class="message-div">R</div>
            </div>
            <!-- End Message Container -->

            <!-- Grid Container -->
            <div class="grid-container">
                <div class="grid-square"><p class="letras">R</p></div>
                <div class="grid-square"><p class="letras">R</p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>

                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>

                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>

                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>

                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
                <div class="grid-square"><p class="letras"></p></div>
            </div>
            <!-- End Grid Container -->

            <!-- Botón de Instrucciones -->
            <button id="instructionsButton" onclick="showInstructions()">Instruccions</button>

            <!-- Pop-up de Instrucciones -->
            <div class="overlay" id="overlay"></div>
            <div class="popup" id="instructionsPopup">
                <p>Com es juga a Sqword:</p>
                <p>Col·loqueu les targetes amb lletres dibuixades a la quadrícula per formar tantes paraules de 3, 4 i 5 lletres com pugueu. Les paraules es poden formar tant horitzontalment (d'esquerra a dreta) com verticalment (de dalt a baix) per a un màxim de 50 punts. Un cop col·locada una lletra, no es pot moure.
                    Un cop col·locada la lletra final, el tauler es puntuarà. Cada paraula es puntua segons la seva longitud (és a dir, una paraula de 4 lletres val 4 punts) i cada línia es puntuarà en funció de la paraula més llarga que contingui. No t'oblidis de compartir la teva puntuació i tornar demà per gaudir d'una nova coberta!</p>
                <!-- Agrega más contenido de instrucciones aquí -->
                <button onclick="hideInstructions()">Cerrar</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Funciones para mostrar y ocultar el pop-up de instrucciones
        function showInstructions() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('instructionsPopup').style.display = 'block';
        }

        function hideInstructions() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('instructionsPopup').style.display = 'none';
        }
    </script>
</body>

</html>
