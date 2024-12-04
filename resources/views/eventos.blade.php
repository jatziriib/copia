
<link rel="stylesheet" href="../css/producto.css">
<div class="container">
    <form id="eventoForm">
        
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
        </div>
        <div>
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora">
        </div>
        <div>
            <label for="lugar">Lugar:</label>
            <input type="text" id="lugar" name="lugar">
        </div>
        <div>
            <label for="celular">Celular:</label>
            <input type="tel" id="celular" name="celular">
        </div>
        <div id="productos">
            <label>Productos:</label>
            <input type="text" name="productos[]" placeholder="Producto">
            <input type="number" name="productos[]" placeholder="Cantidad">
            <input type="number" name="productos[]" placeholder="Precio">
        </div>
        <button type="button" id="addProducto">Agregar Producto</button>
        <button type="submit">Guardar</button>
    </form>
</div>
<script src="../js/app.js" defer></script>


