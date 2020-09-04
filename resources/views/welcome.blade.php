<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Google Drive API Laravel Desde Cero</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('estilo/css/bootstrap.min.css')}}">
        
        <script type="text/javascript" src="{{asset('estilo/js/jquery-3.5.1.min.js')}}" defer></script>
        <script type="text/javascript" src="{{asset('estilo/js/bootstrap.min.js')}}" defer></script>
        
    </head>
    <body>
        
        {{-- Contenedor --}}
        <div class="wrapper">
            <div class="row">
                {{-- Primero --}}
                <div class="col-5">

                    <div class="card shadow ml-5 mt-5">

                        <div class="card-header">
                            <h3 class="text-primary">Subir Archivo</h3>
                        </div>
            
                        <div class="card-body">

                            Cuerpo del body c: 
                        
                            {{--  Archivo  --}}
                            <form action="{{route('subirVideo')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="archivo">Buscar Archivo</label>
                                    <input id="archivo" name="archivo" type="file" class="form-control" placeholder="Seleccione..." required>
                                </div>
                                {{--  Botones  --}}
                                <button type="submmit" class="btn btn-primary">Subir Archivo</button>
                            </form>
                        </div>

                        <div class="card-footer">
                            <p>Último archivo subido: {{$url??'Ninguno'}} </p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>


    </body>
</html>
