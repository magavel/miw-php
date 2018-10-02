<?php

require 'fonction.php';


$donnees=getData();

echo'<div><ul>';
foreach ($donnees as $key =>$value){
    echo '<li><a href="';
    echo 'index.php?page='.$key;
    echo '">';
    echo getTitle($key);
    echo'</a></li>';



}
echo'</ul></div>';
echo getContent($key);
?>





<form
    action="index.php?page=mapage"
    method="post">
    <input type="text" name="nom" value="Mon nom"/> <br/>
    <input type="text" name="prenom" value="Mon prénom"/> <br/>

    <textarea name="contenu" id="" cols="30" rows="10">Mon contenu ici</textarea>
    <input type="submit" value="Valider"/>

</form>
