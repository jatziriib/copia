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
    <li><a class="dropdown-item" href="principal.blade.php">principal</a></li>
  </button>
  <a href="eventos.blade.php"><button type="button" class="btn btn-primary">Eventos</button></a>
  <a href="calendar.blade.php"><button type="button" class="btn btn-primary">Calendario</button></a>
</div>
    <div class="container">
        <!-- Sección de productos -->
        <div class="left-section">
            <div class="products">
                <button class="product-button" data-producto="Canasta chica" data-precio="250">Canasta chica</button>
                <button class="product-button" data-producto="canasta grande" data-precio="450">canasta grande</button>
                <button class="product-button" data-producto="Cubo" data-precio="480">Cubo</button>
                <button class="product-button" data-producto="pestaña" data-precio="200">pestaña</button>
                <button class="product-button" data-producto="bolsa lilies" data-precio="380">bolsa lilies</button>
                <button class="product-button" data-producto="bolsa aves" data-precio="380">bolsa aves</button>
                <button class="product-button" data-producto="lineal" data-precio="450">lineal</button>
                <button class="product-button" data-producto="Gerra" data-precio="850">Guerra</button>
                <button class="product-button" data-producto="v" data-precio="850">Arreglo v</button>
                <button class="product-button" data-producto="Guerra 2" data-precio="850">Guerra 2</button>
                <button class="product-button" data-producto="Carreta rosas" data-precio="550">Carreta rosas</button>
                <button class="product-button" data-producto="Canasta 12 clavel" data-precio="350">Canasta 12 clavel</button>
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
