<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ingresar Alumno</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario Registro Alumno</title>
</head>

<body background="imagen/1516578954.jpg" width="100%" height="100" no-repeat>
    <?php include "php/navbar2.php"; ?>
    
        <div class="container">
            <h2>Registro Alumno</h2>
            <form action="registrar.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese rut alumno" pattern="^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$" required autofocus>
                </div>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombres" name="nombrealumno" placeholder="Ingrese Nombres" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    </div> 
                    <div class="form-group">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    </div>
                </div><br>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese edad" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Ingrese Fecha nacimiento" required autofocus>
                    </div>
                    <div class="form-group">
                         <select id="Sexo" name="sexo">
                            <option disabled selected>Selecciona una opción para Sexo</option>
                            <option value="Hombre">Hombre </option>
                            <option value="Mujer">Mujer</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono de contacto" pattern="^(\+?56)?(\s?)(0?9)(\s?)[987654]\d{7}$" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese direccion de residencia" pattern="^[a-zA-Z0-9\s,.'-]{3,}$" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese ciudad" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    </div>
                </div><br>
                <div class="form-inline">
                    <div class="form-group">                      
                       <input type="text" class="form-control" id="region" name="region" placeholder="Ingrese una Region" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    <div class="form-group">
                        <input type="text" class="form-control" id="comuna" name="comuna" placeholder="Ingrese una Comuna" patter="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus></div></div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="provincia" name="provincia" placeholder="Ingrese provincia" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pais" name="pais" placeholder="Ingrese pais" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    </div></div>
                <br>

                <h2><small>Registro Apoderado</small></h2>

                <div class="form-group">
                    <input type="text" class="form-control" id="rut" name="rutapo" placeholder="Ingrese rut apoderado" pattern="^0*(\d{1,3}(\.?\d{3})*)\-?([\dkK])$" required autofocus>
                </div>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese Nombres" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" pattern="^([a-zA-Z]+[\s'.]?)+\S$" required autofocus>
                    </div>
                </div><br>
                 <div class="form-inline">               
                    <div class="form-group">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono de contacto" pattern="^(\+?56)?(\s?)(0?9)(\s?)[987654]\d{7}$" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese direccion de residencia" pattern="^[a-zA-Z0-9\s,.'-]{3,}$" required autofocus>
                     </div></div>
                    <br>
                     
                    <input TYPE="submit" NAME="guardar" VALUE="Guardar">
                 
                    <input TYPE="reset" NAME="salir" VALUE="Salir">

            </form>
        </div>

</body>

</html>
