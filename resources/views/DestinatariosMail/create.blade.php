<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-1 sm:grid-cols-3">
                <div class="ml-14 mt-8">
                    <p>El envio de correo electrónico puede realizarse a un solo destinatario o a varios destinatarios
                         siguiendo utilizando el siguiente formato en el cuadro de texto: direccion@dominio.com,direccion2@dominio2.com</p>
                         <br>
                         <br>
                         <p>Note que se separan por comas y no se utilizan espacios.</p>
                </div>
                <div class="ml-14 mt-8 text-xs w-1/2 sm:text-base " >
                    
                    <form action="{{route('enviarPDF',$id)}}" method="POST">
                        @csrf
                        <div>
                            <label>Direccion de correo: 
                                <input type="text" name="emailProv" class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg">
                            </label>
                            @error('emailProv')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                            @enderror
                        </div>
                        <div>
                            <label>Asunto:
                                <input type="text" name="asuntomail" class="py-0.5 px-0.5 sm:py-1 sm:px-1 rounded-lg">
                            </label>
                        </div>
                        <div class="mt-8">
                            <label>Comentarios: 
                                <textarea name="msj" rows="10" cols="20" placeholder="Escriba el cuerpo del mensaje"></textarea>
                            </label>
                        </div>
                        <div class="ml-8 mt-2">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8 mb-8"> Enviar formulario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>