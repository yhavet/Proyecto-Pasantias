<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="formulario.css">

    <title>Formulario</title>
</head>
<body>

  <div class="container">
    <div class="row">

      <div class="col-md-6">  

      
          <form class="form-control mt-4" action="AlumnoControlador.php" method="post">

              <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="nombre" name="nombre" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                    <input type="apellido" name="apellido" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">DNI</label>
                    <input type="dni" name="dni" class="form-control" id="exampleFormControlInput1">

              </div>
              <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Nacionalidad</label>
                    <input type="nacionalidad" name="nacionalidad" class="form-control" id="exampleFormControlInput1">

              </div>
              <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Genero</label>
                    <input type="genero" name="genero" class="form-control" id="exampleFormControlInput1">

              </div>
              <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Curso</label>
                    <input type="curso" name="curso" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">telefono</label>
                    <input type="telefono" name="telefono" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="form-group">
              <label for="inlineFormSelectPref">Especialidad</label>
                <select name="especialidad" class="form-select">
                      <option value="1">Construcciones</option>
                      <option value="2">Química</option>
                      <option value="3">Electromecánica</option>
                      <option value="4">Automotores</option>
                      <option value="5">Informática</option>
                      <option value="6">Electrónica</option>
                </select> 
              </div> 

                <input type="submit" class="btn btn-primary mt-4" value="Agregar">

          </form>

      </div>

    </div>
      
  </div>
  
     
    
</body>
</html>