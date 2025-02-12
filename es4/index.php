<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "./Persona.php";
        require_once "./Studente.php";

        $persona = new Persona("Marco", "Rossi");
        $studente = new Studente("Marco", "Iarossi", "MRR06");

        $persona->presentazione();
        $studente->presentazione();
    ?>
</body>
</html>