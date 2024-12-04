<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/producto.css">
    
</head>
<body>
    <div class="container">
        <h1 class="text-center">Gestión de Productos</h1>
        <div class="row">
            <div class="col-md-4">
                <h3 id="form-title">Agregar Producto</h3>
                <form id="product-form">
                
                    <input type="hidden" id="product-id">
                    <div class="form-group">
                        <label for="producto">Producto</label>
                        <input type="text" id="producto" class="form-control" placeholder="Nombre del producto" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" id="precio" class="form-control" placeholder="Precio del producto" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <input type="text" id="categoria" class="form-control" placeholder="Categoría del producto" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit-button">Agregar</button>
                    <button type="reset" class="btn btn-secondary" id="reset-button">Limpiar</button>
                </form>
            </div>

            <div class="col-md-8">
                <h3>Lista de Productos</h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="product-list">
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../js/producto.js" defer></script>
</body>
</html>
