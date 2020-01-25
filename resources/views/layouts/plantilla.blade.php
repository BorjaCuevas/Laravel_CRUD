<html>
    <style>
        .imagenCabecera{
            float: right;
            padding-right: 150px;
            width: 150px;
        }
        
        .cabecera{
            text-align: center;
            font-size: x-large;
            font-family: tahoma;
            margin-bottom: 100px;
        }
        
        .contenido form, table{
            width: 400px;
            margin: 0 auto;
        }
        
        .pie {
            position: fixed;
            bottom: 0px;
            width: 100%;
            font-size: 0.7em;
            margin-bottom: 10px;
        }
        
    </style>
    <head>
        <meta charset="utf-8">
        <title>Laravel_CRUD</title>
    </head>    
    <body>
        <div class="cabecera">
            
            @yield("cabecera")
            <img src="/images/collie.jpg" class="imagenCabecera">
            
        </div>
            
        <div class="contenido">
            
            @yield("contenido")
            
        </div>
            
        <div class="pie">
            
            @yield("pie")
            
            Prueba primera de pié para LARAVEL_CRUD.
            Todos mis derechos propios.
            
        </div>
    </body>
</html>