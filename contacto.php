

<!DOCTYPE html>
<html lang="en">
<?php
        $page_title = 'Contacto';
        include 'template-parts/head.php';
?>


<body>

    <?php
        include 'template-parts/header.php'
    ?>


    <main>
        <section id="section-formulario">

            <form form action="form-check.php" id="formulario" method= "post">
                <label> Nombre: <br><br>
                    <input type="text" name="first_name" required>
                </label>
                <br><br>
                <label> Apellido: <br><br>
                    <input type="text" name="last_name" required>
                </label>
                <br><br>
                <label> Correo electrónico: <br><br>
                    <input type="email" name="email" required>
                </label>
                <br><br>
                <label> Mensaje/propuesta: <br><br>
                    <input type="text" name="contact_us" style="padding-bottom: 150px"; required >
                </label>
                <br><br>
                <label> Instagram: <br><br>
                    <input type="text" name="instagram_user" placeholder="@"  required>
                </label> <br><br><br>
                <label id="enviar">
                    <input type="submit" value="¡Enviar!">
                </label>
            </form>
    
            <article>
                <figure id="contact-img">
                    <img src="img/DSC04138editada.jpg" alt="">
                </figure>
        
                <p id="name"> Wilker Mata.</p>
    
            </article>
        </section>

    
    </main>

    <?php
        include 'template-parts/footer.php'
    ?>


    
</body>



</html>