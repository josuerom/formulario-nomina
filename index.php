<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Nomina</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body>

    <section class="main">

        <figure class="main__figure">
            <img src="./img/illustration.svg" class="main__img">
        </figure>

        <div class="main__contact">

            <h2 class="main__title">Formulario Nomina - UMD</h2>
            <p class="main__paragraph">Bienvenido, por favor diligencie todos los campos del formulario.</p>

            <form action="php/main.php" class="main__form" method="POST">

                <input type="text" name="nombres" placeholder="Nombre y apellido" class="main__input">
                <input type="text" name="salario" placeholder="Salario mensual" class="main__input">
                <input type="text" name="dias_laborados" placeholder="Cantidad de días laborados" class="main__input">
                <input type="text" name="horas_diurnas" placeholder="Horas diurnas" class="main__input">
                <input type="text" name="horas_nocturnas" placeholder="Horas nocturnas" class="main__input">
                <input type="text" name="horas_dominicales" placeholder="Horas dominicales" class="main__input">
                <input type="text" name="comisiones" placeholder="Comisiones" class="main__input">
                <input type="text" name="libranza" placeholder="Libranza" class="main__input">

                <input type="submit" name="enviar" value="Enviar" class="main__input main__input--send">
                <input type="reset" name="limpiar" value="Limpiar" class="main__input main__input--send">

            </form>

            <p class="main__paragraph">Contacto de los creadores:</p>

            <article class="main__social">
                <a href="https://www.uniminuto.edu/bogota-presencial" class="main__link">
                    <img src="./img/uniminuto.svg" class="main__icon">
                </a>

                <a href="https://twitter.com/josueromr" class="main__link">
                    <img src="./img/twitter.svg" class="main__icon">
                </a>

                <a href="https://web.facebook.com/profile.php?id=100000256378797" class="main__link">
                    <img src="./img/facebook.svg" class="main__icon">
                </a>
            </article>

        </div>
    </section>

</body>
</html>