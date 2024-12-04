document.getElementById('addProducto').addEventListener('click', function() {
    const productosDiv = document.getElementById('productos');
    const newProduct = `
        <div>
            <input type="text" name="productos[]" placeholder="Producto">
            <input type="number" name="productos[]" placeholder="Cantidad">
            <input type="number" name="productos[]" placeholder="Precio">
        </div>`;
    productosDiv.insertAdjacentHTML('beforeend', newProduct);
});

document.getElementById('eventoForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const response = await fetch('{{ route('eventos.store') }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    });
    const data = await response.json();
    alert(data.message);
});