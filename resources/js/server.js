
const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const cors = require('cors');


const app = express();
const PORT = 3000;

// Middleware
app.use(cors());
app.use(bodyParser.json());

// Conexión a la base de datos MongoDB
mongoose.connect('mongodb://127.0.0.1:27017/flores1', {
    useNewUrlParser: true,
    useUnifiedTopology: true,
})
.then(() => console.log('Conectado a MongoDB: flores1'))
.catch(err => console.error('No se pudo conectar a MongoDB', err));

// Define el esquema y modelo del producto
const productoSchema = new mongoose.Schema({
    producto: { type: String, required: true },
    precio: { type: Number, required: true },
    categoria: { type: String, required: true },
});

const Producto = mongoose.model('producto_1', productoSchema);

app.post('/api/productos', async (req, res) => {
    const { producto, precio, categoria } = req.body;
    const nuevoProducto = new Producto({ producto, precio, categoria });
    try {
        await nuevoProducto.save();
        res.status(201).send(nuevoProducto);
    } catch (error) {
        res.status(400).send(error);
    }
});


app.listen(PORT, () => {
    console.log(`Servidor en el puerto ${PORT}`);
});
