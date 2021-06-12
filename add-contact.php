<?php 
    include('includes/header.php');
?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>
                        Adicionar Contatos
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="form-group nb-3">
                            <label for="">Nome</label>
                                <input type="text" name="first_name" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Sobrenome</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                            <label for="">Telefone</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                            <div class="form-group nb-3">
                                <button type="submit" name="save_contact" class="btn btn-primary">Cadastrar</button>
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