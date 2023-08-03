<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <title>¡ENHORABUENA!</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            background: #854EB5;
        }

        main {
            width: 100vw;
            height: 100vh;

            display: flex;
            flex-direction: column;
            align-items: center;

            padding-top: 28px;

            font-family: 'Alfa Slab One', cursive;
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            color: #F8F1E8;
            /* text-shadow: 2px 2px 3px 0px rgba(0, 0, 0, 0.25); */
        }

        h1 {
            font-size: 32px;
            font-size: 2em;
            font-weight: 400;
            margin: 0;

        }

        h3 {
            font-size: 15px;
            text-align: center;
            font-weight: 400;
            margin: 0;
            margin-top: 8px;
        }

        input {
            color: rgba(133, 78, 181, 1);
            padding-left: 11px;
            border: 0;
            margin-top: 25px;

            border-radius: 5px;
            background: #F8F1E8;
            width: calc(80% - 10px);
            height: 33px;

            font-family: 'Alfa Slab One', cursive;
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        input::placeholder {
            color: rgba(133, 78, 181, 0.50);
        }

        #winnerList {
            width: calc(80% - 28px);
            height: 40vh;
            padding: 12px 11px;
            border-radius: 8px;

            background: #F8F1E8;
            margin-top: 45px;

            overflow: auto;

        }

        span.winner {
            display: block;
            width: 100%;

            text-align: center;
            font-size: 10px;
            color: #854EB5;

        }

        span.winner:not(:first-child) {
            margin-top: 11px;
        }



        /* Button */
        button {
            margin-top: 17px;
            align-items: center;
            background-color: #F8F1E8;
            border: 0;
            border-radius: 8px;
            box-sizing: border-box;
            color: #5C397B;
            cursor: pointer;
            display: flex;
            font-family: 'Alfa Slab One', cursive;
            font-size: 15px;
            justify-content: center;
            line-height: 24px;

            width: 100px;
            height: 40px;
            max-width: 100%;
            padding: 0 25px;
            position: relative;
            text-align: center;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        button:after {
            background-color: #5C397B;
            border-radius: 8px;
            content: "";
            display: block;
            height: 40px;
            left: 0;
            width: 100%;
            position: absolute;
            top: 0px;
            transform: translate(8px, 8px);
            transition: transform .2s ease-out;
            z-index: -1;
        }

        button:hover:after {
            transform: translate(0, 0);
        }

        button:active {
            background-color: #ffdeda;
            outline: 0;
        }

        button:hover {
            outline: 0;
        }

        @media (min-width: 768px) {
            button {
                padding: 0 40px;
            }
        }
    </style>
</head>

<body>
    <main>
        <h1>¡ENHORABUENA!</h1>
        <h3>HAS ENCONTRADO EL GEOCACHER DE:<br> “EL PARQUE DE LA MARIPOSA”</h3>
        <!-- <span class="h1">¡ENHORABUENA!</span>
        <span class="h3">HAS ENCONTRADO EL GEOCACHER DE:<br> “EL PARQUE DE LA MARIPOSA”</span> -->

        <input type="text" placeholder="Tu nombre" maxlength="23">
        <button>ENVIAR</button>

        <div id="winnerList">
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>
            <span class="winner">02/08/2023 - Pau Rius Noriega</span>

        </div>
    </main>
    <script>
        // alert("Altura de la pantalla: " + window.innerHeight + " píxeles\nAncho de la pantalla: " + window.innerWidth + " píxeles");
        $(document).ready(() => {
            checkInput()
            let date = new Date()

            $.getJSON("./names.json", (data) => {

                const clavesRevertidas = Object.keys(data).reverse();

                clavesRevertidas.forEach(clave => {
                    const valor = data[clave];
                    console.log(`${clave}: ${valor}`);
                });

            })

            $("button").click((e) => {
                let name = $("input").val()

                if (name != "") {
                    if (!localStorage.getItem("xd")) {
                        localStorage.setItem("xd", "xd")
                    }

                    alert("xd")
                    checkInput()
                }

            })

            function checkInput() {
                if (localStorage.getItem("xd")) {
                    $("button").attr("disabled", "true")
                }
            }



        })
    </script>
</body>

</html>