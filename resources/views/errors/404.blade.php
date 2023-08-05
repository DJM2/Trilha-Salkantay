<head>
    <title>Not Found</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
        min-height: 100%;
        min-width: 100%
    }
    .contenido{
        height: 100%; width:100%; background:#5489a6; color:#fff;
        font-size: 17px
    }
    .contenido a{
        color: #000;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 12px;
        transition: 0.4s;
    }
    
    .contenido button{
        background: #fff;
        border-style: none;
        border-radius: 5px;
        margin-top:20px;
        font-size: 17px;
        padding: 8px 8px;
        transition: 0.4s;
    }
    
    .contenido button:hover{
        background:#083379;
        transition: 0.4s;
    }
    .contenido button:hover a{
        color: #ffffff;
        transition: 0.4s;
    }
</style>
<div class="contenido">
    <div style="padding-top: 50vh; padding-left: 40%; padding-right: 40%; text-align:center">
        <p>Error 404</p>
        <p>Pagina no encontrada</p>
        <button><a href="javascript:back();">Volver</a></button>
        <script>
            function back(){
                window.history.back();
            }
        </script>
    </div>
</div>
