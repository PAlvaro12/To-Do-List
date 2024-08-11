<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicasion Todo lis en Laravel</title>
</head>
<body>
    
<form action="{{ url('/')}}" method="post">
@csrf
<input type="text" name="task" id="task">

<input type="submit" value="Agregar tarea">

</form>
<br/>
<table border="1">

    <tr>
        <td>Nombre de la tarea </td>
        <td>Acción </td>
    </tr>
    
@foreach($tasks as $task)

    <tr>
        <td> {{ $task->task }}</td>
        <td> X </td>
    </tr>
@endforeach



</table>


</body>
</html>