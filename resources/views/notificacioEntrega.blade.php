
<h1>
Notificación de visita agendada
</h1>
<p><h3> Hola: {{$data->visitante}}</h3></p>
<br />
<br />
<p><h3> A continuación, vienen los detalles de tu visita a <b>{{$data->edificio}}</h3></p>
 <ol>
  <li>Fecha: {{$data->FechaVisita}}</li>
  <li>Duración:  {{$data->Duracion}}</li>
  <li>Dirección: {{$data->Direccion}}</li>
  <li>Persona a visitar: {{$data->receptor}}</li>
  <li>{{$data->entidadreceptor }}</li>
  <li>{{ $data->pisoreceptorrr }} </li>
</ol>

   <!-- Verifica si la variable está definida antes de usarla -->

    <img src="{{ storage_path('/temp/qr.png')   }}" type="image/png">

    <div class="visible-print text-center">
      {!! QrCode::size(100)->generate($data->id); !!}
    <p>Muestra el código al acudir a tu visita para identificarte fácilmente.</p>
    </div>



    <br /><br /><br />
    Este correo es generado automaticamente  *No Responder*
    <br />

    <br /><br /><br /><br /><br />

<div align="center">Atentamente</div>
<div align="center">Sistema de Control de Accesos</div>
