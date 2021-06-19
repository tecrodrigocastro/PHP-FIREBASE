<?php 
session_start();
    include('includes/header.php');
?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php
                    if (isset($_SESSION['status'])) {
                        echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                        unset($_SESSION['status']);
                    }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                        Usuarios
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="form-group nb-3">
                            <label for="">Nome Completo</label>
                                <input type="text" name="full_name" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Telefone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Senha</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    include('includes/footer.php');
?>