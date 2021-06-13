<?php
session_start();
include('dbcon.php');
    
    if (isset($_POST['delete_btn'])) {
        $del_id = $_POST['delete_btn'];
        $ref_table = 'contacts/'.$del_id;
       $deletequery_result =  $database->detReference()->remove();

       if ($deletequery_result) {
        $_SESSION['status'] = "Contato deletado com sucesso";
        header('Location: index.php');
    }
    else{
        $_SESSION['status'] = "Erro ao deletar";
        header('Location: index.php');

    }
    }



    if (isset($_POST['update_contact'])) 
    {
        $key = $_POST['key'];
        $nome = $_POST['first_name'];
        $sobrenome = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $updateData = [
            'fname'=> $nome,
            'lname'=> $sobrenome,
            'email'=> $email,
            'phone'=> $phone,

        ];
        $ref_table= 'contacts/'.$key;
        $updatequery_result =  $database->getReference($ref_table)->update($updateData);

        if ($updatequery_result) {
            $_SESSION['status'] = "Contato atualizado com sucesso";
            header('Location: index.php');
        }
        else{
            $_SESSION['status'] = "Erro ao atualizar";
            header('Location: index.php');

        }
    }



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