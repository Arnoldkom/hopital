<?php
include 'config.php';


        
        $requette = $bdd->prepare('SELECT * FROM medecin where id_user = ?');
        $requette->execute(array($_POST['medecin']));

        $result = '';

        while($donnees = $requette->fetch())
        {
            $result .=' 
            
            <div class="col-md-12">
            <div class="grid1">
                <div class="agile-form">
                <ul class="field-list" >
                    <li>
                        <label class="form-label"> 
                            Hôpital 
                            
                        </label>
                        <div class="form-input">
                            <p align="left">'.$donnees['hopital'].'</p>
                        </div>
                    </li>
                    <li>
                        <label class="form-label"> 
                            Médecin 
                            
                        </label>
                        <div class="form-input">
                            <p align="left">'.$donnees['id_user'].'</p>
                        </div>
                    </li>
                    <li>
                        <label class="form-label"> 
                            Expérience 
                            
                        </label>
                        <div class="form-input">
                            <p align="left">'.$donnees['Experience'].'</p>
                        </div>
                    </li>
                   
                </ul>
                </div>
            </div>
        </div>
            
            
            ';
        




        }
        echo $result;
?>