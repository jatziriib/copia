document.addEventListener("DOMContentLoaded", () => {
    const productButtons = document.querySelectorAll('.product-button');
    const tableBody = document.querySelector('#nota-venta-body');
    const totalGeneralDisplay = document.getElementById('total-general');
    const pagoInput = document.getElementById('pago');
    const cambioDisplay = document.getElementById('cambio');

    let carrito = [];
    let totalGeneral = 0;

    function actualizarNota() {
        tableBody.innerHTML = '';
        totalGeneral = 0;

        carrito.forEach(item => {
            const subtotal = item.cantidad * item.precio;
            totalGeneral += subtotal;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.cantidad}</td>
                <td>${item.producto}</td>
                <td>$${item.precio.toFixed(2)}</td>
                <td>$${subtotal.toFixed(2)}</td>
            `;
            tableBody.appendChild(row);
        });

        totalGeneralDisplay.textContent = `$${totalGeneral.toFixed(2)}`;
    }

    productButtons.forEach(button => {
        button.addEventListener('click', () => {
            const producto = button.getAttribute('data-producto');
            const precio = parseFloat(button.getAttribute('data-precio'));

            const existente = carrito.find(item => item.producto === producto);
            if (existente) {
                existente.cantidad += 1;
            } else {
                carrito.push({ producto, cantidad: 1, precio, total: precio });
            }

            actualizarNota();
        });
    });

    pagoInput.addEventListener('input', () => {
        const pago = parseFloat(pagoInput.value) || 0;
        const cambio = pago - totalGeneral;
        cambioDisplay.textContent = cambio >= 0 ? `$${cambio.toFixed(2)}` : 'Pago insuficiente';
    });
});