<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <label for="nom"> Nom:</label>
        <input type="text" placeholder="entrez votre nom" name="nom" id="nom" required></br>
        <label for="prénom"> Prénom:</label>
        <input type="text" placeholder="entrez votre prénom" name="prénom" id="prénom" required> </br>
        <label for="date"> Date de naissance:</label>
        <input type="date" placeholder="entrez votre date de naissance" name="date" id="datee" required> </br>
        <button type="submit" value="SAVE" name="ok"> SAVE</button>

</form>
        

<?php 
 if (isset($_POST['date'])) {
            $naiss = $_POST['date'];
            $naissance = new DateTime($naiss);
            $today = new  DateTime();
            $n=$naissance->format('Y');
            $t=$today->format('Y');
            $age= $t - $n;
            if ($age>1) {
                $t= sprintf("Vous avez %d ans", $age);
                echo $t;
            }
            else {
                $t= sprintf("Vous avez %d an", $age);
                echo $t;
            }
}
?>
</body>
</html>
