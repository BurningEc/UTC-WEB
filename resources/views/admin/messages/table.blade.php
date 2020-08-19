<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>

            <th>Nombres</th>
            <th>Correo</th>
            <th>Tema</th>

            <th>Mensaje</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
        <tr>
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->subject}}</td>
            <td>{{$message->message}}</td>



        </tr>
        @endforeach
    </tbody>
</table>

