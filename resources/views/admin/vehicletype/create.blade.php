




{!! Form::model($role, ['url' => ['update-role', $role->id], 'method' => 'PUT', 'files' => true]) !!}

                 @include('admin.roles.partials.form')

            {!! Form::close() !!}
