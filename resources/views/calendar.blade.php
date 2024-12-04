<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/app.css"> 
</head>
<body>
    <div class="logo text-center mt-4">
        <img src="image/logoo.jpg" alt="flores del guadiana" class="img-fluid">
    </div>

    <div class="dropdown-center">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    categorias
    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="centros.blade.php">Centros</a></li>
    <li><a class="dropdown-item" href="arreglos.blade.php">arreglos</a></li>
    <li><a class="dropdown-item" href="principal.blade.php">principal</a></li>
    <li><a class="dropdown-item" href="producto.blade.php">productos</a></li>
  </button>

</div>


    <div class="container mt-5">
        <h1 class="text-center">Calendario de Eventos</h1>
        <div class="calendar mt-4">
            <div class="calendar-header text-center">
                <button class="btn btn-sm btn-outline-dark" id="prevMonth">Anterior</button>
                <span id="monthYear"></span>
                <button class="btn btn-sm btn-outline-dark" id="nextMonth">Siguiente</button>
            </div>
            <table class="table table-bordered text-center mt-3">
                <thead>
                    <tr>
                        <th>Domingo</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sábado</th>
                    </tr>
                </thead>
                <tbody id="calendarGrid"></tbody>
            </table>
        </div>
    </div>
    <script src="../js/calendar.js" defer></script>
</body>
</html>
