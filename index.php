<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form id="formProducto">
        <h2 class="form-title">Formulario de Producto</h2>

        <div class="grid-2col">
            <div>
            <label for="codigo">Código del Producto:</label>
            <input type="text" id="codigo" name="codigo">
            </div>

            <div>
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre">
            </div>

            <div>
            <label for="bodega">Bodega:</label>
            <select id="bodega" name="bodega"></select>
            </div>

            <div>
            <label for="sucursal">Sucursal:</label>
            <select id="sucursal" name="sucursal"></select>
            </div>

            <div>
            <label for="moneda">Moneda:</label>
            <select id="moneda" name="moneda"></select>
            </div>

            <div>
            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio">
            </div>
        </div>

        <div class="materiales-group">
        <label>Materiales</label>
        <div class="checkboxes">
            <label><input type="checkbox" name="material[]" value="plastico"> Plástico</label>
            <label><input type="checkbox" name="material[]" value="metal"> Metal</label>
            <label><input type="checkbox" name="material[]" value="madera"> Madera</label>
            <label><input type="checkbox" name="material[]" value="vidrio"> Vidrio</label>
            <label><input type="checkbox" name="material[]" value="textil"> Textil</label>
        </div>
        </div>


        <label>Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea>

        <button type="button" id="guardarBtn">Guardar Producto</button>
    </form>

    <script src="js/main.js"></script>
</body>
</html>