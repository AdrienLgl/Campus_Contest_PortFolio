<?php

function avis(){


$user = "root";
$pass = "";

 //Count des lignes

 $bdd2 = new PDO('mysql:host=localhost;dbname=PortFolio', $user, $pass);

 $requete2 = $bdd2->query('SELECT COUNT(*) as count FROM Avis');
 
 while ($data2 = $requete2->fetch()){
    

 $br = $data2['count']+1;

            }
    

 $requete2->closeCursor();

 $id = 1;

 while ($id<$br){

    $bdd = new PDO('mysql:host=localhost;dbname=PortFolio', $user, $pass);

    $requete = $bdd->query('SELECT * FROM Avis WHERE id_formulaire = "'.$id.'"');
    
    while ($data = $requete->fetch()){
        
        
       $nom = $data['nom'];
       $prenom = $data['prenom'];
       $note = $data['note'];
       $message = $data['message'];
       $statut = $data['statut'];

   }
        
        $requete->closeCursor();

        include 'Includes/Avis.php';
    
        $id = $id+1;
    }

}



function couleur(){
    
    global $note;
    if($note==1){
        echo('
        <a href="#1" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" title="Donner 3 étoiles">☆</a>
                   
        <a href="#4" title="Donner 4 étoiles">☆</a>
                   
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

    }elseif($note==2){
        echo('
        <a href="#1" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" title="Donner 3 étoiles">☆</a>
                   
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                   
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');
        

    }elseif($note==3){
        echo('

        <a href="#1" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                    
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                    
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

    }elseif($note==4){
        echo('

        <a href="#1" title="Donner 1 étoile">☆</a>
                   
        <a href="#2" style="color: orange;" title="Donner 2 étoiles">☆</a>
                    
        <a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                    
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                  
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

    }elseif($note==5){
        echo('

        <a href="#1" style="color: orange;" title="Donner 1 étoile">☆</a>
                    
        <a href="#2" style="color: orange;" title="Donner 2 étoiles">☆</a>
                   
        <a href="#3" style="color: orange;" title="Donner 3 étoiles">☆</a>
                
        <a href="#4" style="color: orange;" title="Donner 4 étoiles">☆</a>
                   
        <a href="#5" style="color: orange;" title="Donner 5 étoiles">☆</a>');

}

 

    
    





}




?>