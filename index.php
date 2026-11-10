<?php include "header.php"; ?>
  <main>
    <section class="portada">
        <h1>JEWERLY CR</h1>
        <p>Somos un negocio de venta de joyería de alta calidad en Costa Rica</p>
        <a href="contacto.php" class="boton">Cotizaciones</a>
        </section>
    <section class="servicio">
        <h2>Servicios</h2>
            <div class="cards" id="cards">
            </div>
        </section>

    <section class="preguntas contenedor">
        <h2>Preguntas frecuentes</h2>
            <div class="accordion">
            <div class="item">
            <button class="titulo">¿Realizan envíos a todo el país?</button>
            <div class="contenido"><p>Realizamos envíos gratis a todo el país por medio de Correos de Costa Rica.</p></div>
            </div>
            <div class="item">
            <button class="titulo">¿Cuentan con un certificado de calidad?</button>
            <div class="contenido"><p>Contamos con varias certificaciones de GIA, IGI y HDR Antwerp.</p></div>
            </div>
            <div class="item">
            <button class="titulo">¿Cuentan con tienda física?</button>
            <div class="contenido"><p>Solo manejamos tienda virtual.</p></div>
            </div>
            </div>
            </section>

    <section class="galeria">
        <h2>Galería</h2>
            <p>Algunas de nuestras joyas más populares</p>
            <div class="imagenes">
                <img src="./img/Joya1.jpg" alt="Set collar y aretes plateados">
                <img src="./img/Joya2.jpg" alt="Collar dorado edición especial">
                <img src="./img/Joya3.jpg" alt="Set collar, pulsera y anillo dorados">
                </div>
            </section>
</main>
<?php include "footer.php"; ?>