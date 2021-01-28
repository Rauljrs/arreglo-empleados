<html>
<head>
    <title>Programa de Arreglos Asociativos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <?php
    if (isset($_POST['btn']) && $_POST['btn'] == 'Cargar') {
        
            $empleados = [
                "empleado1" => [
                    $_POST['nombre1'],
                    $_POST['apellido1'],
                    $_POST['cedula1'],
                    $_POST['sueldo1'],
                    $_POST['departamento1'],
                    $_POST['lugartrabajo1']
                ],
                "empleado2" => [
                    $_POST['nombre2'],
                    $_POST['apellido2'],
                    $_POST['cedula2'],
                    $_POST['sueldo2'],
                    $_POST['departamento2'],
                    $_POST['lugartrabajo2']
                ],
                "empleado3" => [
                    $_POST['nombre3'],
                    $_POST['apellido3'],
                    $_POST['cedula3'],
                    $_POST['sueldo3'],
                    $_POST['departamento3'],
                    $_POST['lugartrabajo3']
                ]
            ];
            
    
                print
                "
                <table class='table'>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Sueldo</th>
                        <th>Departamento</th>
                        <th>Lugar de Trabajo</th>
                    </tr>";
               
                    print "<tr>";
    
                foreach($empleados as $key => $value){

                    for($i = 0; $i < count($value); $i++){
                        print "
                                <td>{$value[$i]}</td>
                        ";
                    }
                    print "</tr>";

                }

                print 
                "</table>";
        }
        
        
            print "<br/><br/>";
            print "<a href='index.html'>Regresar</a>";
        
    
    ?>
</body>

</html>