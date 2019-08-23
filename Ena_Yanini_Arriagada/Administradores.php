<html> 
<head>
   <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ingresar Alumno</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro Alumno</title>
</head> 

<body background="imagen/1516578954.jpg" width="100%" height="100" no-repeat> 
    <?php include "php/navbar2.php"; ?>
    
        <div class="container">
            <h2>Registro Administradores</h2>
            <form action="registrar.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="rut" name="rutadministrador" placeholder="Ingrese rut Administrador" required autofocus>
                </div>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" name="nombreadministrador" placeholder="Ingrese Nombre" required autofocus>
                    </div> 
                    <div class="form-group">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" required autofocus>
                    </div>
                </div><br>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese nombre usuario" patern="^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$" required autofocus>
                    </div>
                    <div class="form-group">
                         <input type="text" class="form-control" id="password" name="password" placeholder="Ingrese contraseña"  pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" required autofocus>
                    </div>
                    <br>
                   <br>
                    <input TYPE="submit" NAME="guardar" VALUE="Guardar">
                    <input TYPE="reset" NAME="salir" VALUE="Salir">

            </form>
        </div>

</body>

</html>

                                
                        
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                 
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                  
            
                 