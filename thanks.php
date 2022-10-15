<?php
$name = $_POST['name'];
$courriel = $_POST['courriel'];
$telephone = $_POST['telephone'];
$theme = $_POST['theme'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thanks</title>
    <link rel="stylesheet" href="contact.css"/>
</head>
<body>
<p id="message">
    Merci <?php echo $_POST['name']; ?> de nous avoir contacté à propos
    de “<?php echo $_POST['theme']; ?>”.<br>
    Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST['courriel']; ?> ou par téléphone
    au <?php echo $_POST['telephone']; ?> dans les plus brefs délais pour traiter votre demande :<br>
    <?php echo $_POST['message']; ?>
</p>
</body>
</html>