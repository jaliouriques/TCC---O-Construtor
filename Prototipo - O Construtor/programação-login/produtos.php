<?php 
	if ($_GET['linha'] == "link") {

        $nome = $_GET['nome'];

        echo "$nome \n";
    }

    elseif ($_GET['linha'] == "post") {

        $busca = $_POST['BUSCA'];

        echo "A Busca pelo termo $busca não encontrou produtos \n";
    }
?>