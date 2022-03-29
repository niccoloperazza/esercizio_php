<?php
if (isset($_POST['submit']) and isset($_POST['nome'])) { // se sono attivati nome e invia
    if ($_POST['nome'] != "") {  // se il campo nome non è vuoto
    $nome = filter_var($_POST['nome'] , FILTER_SANITIZE_STRING); // sanitize del campo
    
            if(!filter_var($nome, FILTER_SANITIZE_STRING)) {  
                    $result = "Il nome indicato non è accettato.";
            } 
            else {
                // includere il connettore mysql
                require_once("db_connector.php");	
                $inserisci_nome = 'INSERT INTO nomi SET nome = "' . $nome . '"';

                $duplicato_nome = 'SELECT nome FROM nomi WHERE nome = "' .$nome. '"';
                $verifica_duplicato_nome = mysqli_query ($connection, $duplicato_nome);

                if ($verifica_duplicato_nome->num_rows) {
                        $result = "Il tuo nome è già presente.";
                    }
                else {
                    if (mysqli_query ($connection, $inserisci_nome)) {
                    $result = "Il tuo nome è stato registrato";
                    }
                }
            } 
    }
else {  
    $result = 'Per favore inserisci un nome.'; 
}
}

// se result esiste mostrala
if ($result) {echo $result ; }

?>