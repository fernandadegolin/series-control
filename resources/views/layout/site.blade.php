<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php yield ('titulo') ?> </title>
</head>
<body>
    



</body>
</html>




<h3> View Index </h3>
<?php foreach ($contatos as $contato) ?>
    <p> {{ $contato->nome }} </p>
    <p> {{ $contato->idade }} </p>

<?php endforeach ?>

