<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('elements.head_web')  
    <title>Grupo Whiteboard S.A</title>  
</head>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
</script>
<body>
    <div class="container">
        @include('elements.navbar_web')
        
        @yield('content')  

        @include('elements.footer')
    </div>

    
</body>
</html>