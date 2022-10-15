<?php
    //echo $_POST['user_name'];
    //<a href="article.php?key=value&other_key=other_value">link</a>. Methode transition depuis un lien.
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form  action="/thanks.php"  method="post">

<div>
  <label  for="name">Nom :</label>
  <input  type="text"  id="name"  name="name">
</div>

<div>
  <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="courriel">
</div>

<div>
    <label for="telephone">Téléphone :</label>
    <input type="tel" id="telephone" name="telephone">
</div>

<div>
    <label for="style">Thématique :</label>
    <select name="theme" id="theme">
        <option value="">-- Please choose an option--</option>
        <option value="theme1">Theme 1</option>
        <option value="theme2">Theme 2</option>
        <option value="theme3">Theme 3</option>
        <option value="theme4">Theme 4</option>
</select>
</div>

<div>
  <label  for="message">Message :</label>
  <textarea  id="message"  name="message"></textarea>
</div>

<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>

</form>
    
</body>
</html>