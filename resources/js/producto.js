let productos = [
    { producto: "Rosa", precio: 10.0, categoria: "Flores" },
    { producto: "Tulipán", precio: 15.0, categoria: "Flores" }
];
console.log(productos);

const productForm = document.getElementById('product-form');
const productList = document.getElementById('product-list');
const formTitle = document.getElementById('form-title');
const submitButton = document.getElementById('submit-button');
const productIdField = document.getElementById('product-id');

function renderProductos() {
    productList.innerHTML = '';
    productos.forEach((producto, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${producto.producto}</td>
            <td>$${producto.precio.toFixed(2)}</td>
            <td>${producto.categoria}</td>
            <td>
                <button class="btn btn-warning btn-sm btn-custom" onclick="editProducto(${index})">Editar</button>
                <button class="btn btn-danger btn-sm btn-custom" onclick="deleteProducto(${index})">Eliminar</button>
            </td>
        `;
        productList.appendChild(row);
    });
}


productForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const producto = document.getElementById('producto').value;
    const precio = parseFloat(document.getElementById('precio').value);
    const categoria = document.getElementById('categoria').value;
    const productId = productIdField.value;

    if (productId) {
        
        productos[productId] = { producto, precio, categoria };
        resetForm();
    } else {
     
        productos.push({ producto, precio, categoria });

        try {
            const response = await fetch('/api/productos', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ producto, precio, categoria }),
            });
            const data = await response.json();
            console.log('Producto guardado:', data);
        } catch (error) {
            console.error('Error al guardar el producto:', error);
        }
    }

    renderProductos(); 
});


function editProducto(index) {
    const producto = productos[index];
    document.getElementById('producto').value = producto.producto;
    document.getElementById('precio').value = producto.precio;
    document.getElementById('categoria').value = producto.categoria;
    productIdField.value = index;
    formTitle.textContent = 'Editar Producto';
    submitButton.textContent = 'Actualizar';
}


function deleteProducto(index) {
    if (confirm('¿Estás seguro de eliminar este producto?')) {
        productos.splice(index, 1);
        renderProductos();
    }
}


function resetForm() {
    productForm.reset();
    productIdField.value = '';
    formTitle.textContent = 'Agregar Producto';
    submitButton.textContent = 'Agregar';
}


renderProductos();