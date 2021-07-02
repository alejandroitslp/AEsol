<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-8 ml-8 mb-8">
                    @if (session('info'))
                        <div class="alert alert-success">
                            <strong>{{session('info')}}</strong>
                        </div>
                    @endif
                    
                    <div>
                        <label for="">Nombre: </label>
                        <input class="w-1/8 h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" value="{{$usuario->name}}">
                    </div>
                    <div class="mt-8 mb-8">
                        <label for="">Email: </label>
                        <input class="w-1/8 h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" value="{{$usuario->email}}">
                    </div>
                    <p class="text-lg">Roles: </p>
                    {!! Form::model($usuario,['route' =>  ['usuarios.update', $usuario], 'method' =>'put']) !!}
                        @foreach ($roles as $role)
                            <div class="mt-2">
                                <label>
                                    {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                    {{$role->name}}
                                </label>
                            </div>
                        @endforeach

                        {!! Form::submit('Asignar Rol', ['class' => 'mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full']) !!}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>