<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cita</title>
</head>
<body align="center">
<table border="0" class="table table-striped" width="420" align="center" bgcolor="white">   
    <h1>Crear Cita</h1> 
    <form action="{{ route('cita.store')}}" method="post">
        @csrf
            <tr>
                <td>
                    <h3>Asunto</h1>
                </td>
                <td>
                    <textarea name="asunto" placeholder="Detalles..." required></textarea>
                </td>    
            </tr> 
            
            <tr>
                <td>
                    <h3>Agendar cita</h1>
                </td>
                <td>
                    <input type="datetime-local" name="fecha_agenda" required>
                </td>    
            </tr>
            <tr>
                <td>
                    <h3>Animal</h1>
                </td>
                <td>
                    <!-- Realizamos un array que verifique el cliente con el mismo id en la llave foreanea del cliente en el animal-->
                    @foreach ($clientes as $c)

                    <select name="animal_id" required>
                        <option value="">Selecciona el animal/Cliente</option>
                        @foreach ($animals as $a)
                            <option value="{{ $a->id}}">
                                {{ $a->nombres }} // 
                            @if ($a->clientes_id == $c->id)
                                {{$c->nombres}}
                            @endif
                            </option>
                        @endforeach
                    </select>         

                    <p>¿No existe en la base de datos? <a href="">Registralo</a></p>        
                    @endforeach

                </td>    
            </tr>
            <tr>
                <td>
                    <h3>Médico</h1>
                </td>
                <td>
                    <select name="medico_id" required>
                        <option value="">Selecciona el médico</option>
                        @foreach ($medicos as  $nombre => $id)
                            <option value="{{ $id}}">{{ $nombre }}</option>
                        @endforeach
                    </select>        
                </td>    
            </tr>
            <tr>
                <td>
                    <h3>Tipo Servicio</h1>
                </td>
                <td>
                    <select name="servicio_id" id="">
                        <option value="">Selecciona el tipo servicio</option>
                    @foreach ($servicios as $s)
                    <option value="{{ $s->id }}"> {{$s->nombre}} </option>
                    @endforeach
                    </select>        
                </td>
            </tr>        
            
            <tr>
                <td colspan="2">
                    <button type="submit">Crear</button>
                </td>
            </tr>
    </form>
</table>
</body>
</html>