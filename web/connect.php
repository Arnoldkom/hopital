
<?php
/* Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)*/
header('Content-type: text/html; charset=UTF-8');

/* Initialisation de la variable du message de réponse*/
$message = null;

/* Récupération des variables issues du formulaire par la méthode post*/
$pseudo = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'password');

/* Si le formulaire est envoyé*/
if (isset($pseudo,$pass)) 
{
    
    /* Teste que les valeurs ne sont pas vides ou composées uniquement d'espaces */  
    $pseudo = trim($pseudo) != '' ? $pseudo : null;
    $pass = trim($pass) != '' ? $pass : null;
  
  
  /* Si $pseudo et $pass différents de null */
  if(isset($pseudo,$pass)) 
  {
    /* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation
    A MODIFIER avec vos valeurs */
    $hostname = "localhost";
    $database = "hopital";
    $username = "root";
    $password = "";
    
    /* Configuration des options de connexion */
    
    /* Désactive l'éumlateur de requêtes préparées (hautement recommandé) */
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    
    /* Active le mode exception */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    
    /* Indique le charset */
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    
    /* Connexion */
    try
    {
      $connect = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, $pdo_options);
    }
    catch (PDOException $e)
    {
      exit('problème de connexion à la base');
    }    
    
    /* Requête pour récupérer les enregistrements répondant à la clause : champ du pseudo et champ du mdp de la table = pseudo et mdp posté dans le formulaire */
	
	
	
	
	
    $requete = "SELECT * FROM utilisateur WHERE email = :nom AND password = :password";  
    $requete2 = "SELECT * FROM utilisateur WHERE email = :nom AND password = :password";  
    
    try
    {
      /* Préparation de la requête*/
      $req_prep = $connect->prepare($requete);
      
      /* Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau*/
      $req_prep->execute(array(':nom'=>$pseudo,':password'=>$pass));
       /* Préparation de la requête*/
       $req = $connect->prepare($requete2);
      
       /* Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau*/
       $req->execute(array(':nom'=>$pseudo,':password'=>$pass));
       
      /* Création du tableau du résultat avec fetchAll qui récupère tout le tableau en une seule fois*/
      $resultat = $req_prep->fetchAll(); 
      $nom = "";
      $id_admin = "";
      $statut = "";
      $nb_result = count($resultat);
      
      if ($nb_result == 1)
      {
        if($donnees = $req->fetch())
        {
          
          $id_admin = $donnees['id'];
          $nom = $donnees['Nom'];
            $statut = $donnees['Satut'];
            
        }
        if (!session_id()) session_start();
            $_SESSION['id_admin'] = $id_admin;
            $_SESSION['login'] = $_POST['email'];
            $_SESSION['nom'] = $nom;
            $_SESSION['statut'] = $statut;
      
           header("Location: prendre-un-rdv.php");  exit();
      
      }
      else if ($nb_result > 1)
      {
        /* Par sécurité si plusieurs réponses de la requête mais si la table est bien construite on ne devrait jamais rentrer dans cette condition */
        echo 'Problème de d\'unicité dans la table';
        header("Location: index.php");  exit();
      }
      else
		  
      {    header("Location: index.php");  exit();
	  
      }
    }
    catch (PDOException $e)
    {
      echo 'Problème dans la requête de sélection';
      header("Location: index.php");  exit();
    }	
  }
  else 
  {/*au moins un des deux champs "pseudo" ou "mot de passe" n'a pas été rempli*/
    echo 'Les champs Pseudo et Mot de passe doivent être remplis.';
    header("Location: index.php");  exit();
  }
}
?>

