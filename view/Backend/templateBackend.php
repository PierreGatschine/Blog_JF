<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title><?= $title ?></title>
    
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">

    <link rel="stylesheet" href="public/css/admin/style.css">
</head>

<body>








    <?= $content ?>




 <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

</body>

</html>

