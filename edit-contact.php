<?php 
    include('includes/header.php');
?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>
                        Editar Contatos
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                            include('dbcon.php');
                            if ($_GET['id']) {
                                $key_child = $_GET['id'];
                                $ref_table= 'contacts';
                                $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

                                if ($getdata > 0) {
                                    ?>

                                  
                        <form action="code.php" method="POST">

                            <input type="hidden" name="key" value="<?=$key_child;?>">
                            <div class="form-group nb-3">
                            <label for="">Nome</label>
                                <input type="text" name="first_name" value="<?=$getdata['fname'];?>" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Sobrenome</label>
                                <input type="text" name="last_name" value="<?=$getdata['lname'];?>" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Email</label>
                                <input type="email" name="email" value="<?=$getdata['email'];?>" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Telefone</label>
                                <input type="number" name="phone" value="<?=$getdata['phone'];?>" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                                <button type="submit" name="update_contact" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form>
                        <?php
                                
                            }else{  
                                $_SESSION['status'] = "Id invalido";
                                header('Location: index.php');
                                exit();
                            }
                        }else{  
                            $_SESSION['status'] = "Não encontrado";
                            header('Location: index.php');
                            exit();
                        }
                        
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    include('includes/footer.php');
?>