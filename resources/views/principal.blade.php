<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flores del Guadiana</title>
    <link rel="stylesheet" href="../css/pri.css">

</head>
<body>
<div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="image/logoo.jpg" alt="flores del guadiana">
            </div>
            <div class="dropdown-center">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    categorias
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="centros.blade.php">Centros</a></li>
    <li><a class="dropdown-item" href="arreglos.blade.php">arreglos</a></li>
  </button>
  <a href="eventos.blade.php"><button type="button" class="btn btn-primary">Eventos</button></a>
  <a href="calendar.blade.php"><button type="button" class="btn btn-primary">Calendario</button></a>
</div>


    <div class="container">
        <!-- Sección de productos -->
        <div class="left-section">
            <div class="products">
                <button class="product-button" data-producto="Docena" data-precio="250">Docena</button>
                <button class="product-button" data-producto="1/2 Docena" data-precio="125">1/2 Docena</button>
                <button class="product-button" data-producto="Girasol" data-precio="100">Girasol</button>
                <button class="product-button" data-producto="Gerbera" data-precio="75">Gerbera</button>
                <button class="product-button" data-producto="Docena" data-precio="250">Docena</button>
                <button class="product-button" data-producto="1/2 Docena" data-precio="125">1/2 Docena</button>
                <button class="product-button" data-producto="mixto" data-precio="100"> mixto</button>
                <button class="product-button" data-producto="Gerbera" data-precio="75">Gerbera</button>
            </div>
           
        </div>

        <!-- Sección de Nota de Venta -->
        <div class="nota-venta">
            <h3>Nota de Venta</h3>
            <table>
                <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Producto</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="nota-venta-body">
                    
                </tbody>
            </table>
            <div class="totales">
                Total General: <span id="total-general">$0.00</span>
            </div>
            <div class="input-group">
                <label for="pago">Pago:</label>
                <input type="number" id="pago" placeholder="Cantidad pagada">
            </div>
            <div class="totales">
                Cambio: <span id="cambio">$0.00</span>
            </div>
            <div class="action-buttons">
                <button class="action-button" id="guardar">Guardar</button>
                
            </div>
        </div>
        
    </div>

    <script src="../js/app.js" defer></script>
</body>
</html>
