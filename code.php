<?php
session_start();
include('dbcon.php');
    
    if(isset($_POST['save_contact']))
    {
        $nome = $_POST['first_name'];
        $sobrenome = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $postData = [
            'fname'=> $nome,
            'lname'=> $sobrenome,
            'email'=> $email,
            'phone'=> $phone,

        ];
        $ref_table = "contacts";
        $postRef_result = $database->getReference($ref_table)->push($postData);

        if ($postRef_result) {
            $_SESSION['status'] = "Contato cadastrado com sucesso";
            header('Location: index.php');
        }
        else{
            $_SESSION['status'] = "Erro ao cadastrar";
            header('Location: index.php');

        }

        
    }

?>