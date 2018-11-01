<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>KC</title>
        <link rel="icon" type="text/css" href="img/KC.png">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
        <link href="css/KStyle.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Kozima's Cheker</h1>
            </div>
            <div class="row">
                <form class="form-group" id="potato" method="post">
                    <label>Informe o CEP para a busca.</label>
                    <input type="text" name="cep" class="form-control" placeholder="cep, ex: 88000000" required>
                    <button type="submit" onclick="getJSONRun()" class="btn btn-primary">Buscar</button> 
                </form>
                <script>
                    function getJSONRun(){
                    
                        var endereco = document.getElementsByName("cep")[0].value;
                    
                        $.getJSON('https://api.postmon.com.br/v1/cep/'+endereco, function(data) {            
                            window.location.href = "loadCep.php?estado="+data.estado+"&cidade="+data.cidade+"&bairro="+data.bairro+"&logradouro="+data.logradouro+"&complemento="+data.complemento+"&cep="+data.cep;
                                                                                                                          
                    })};
                </script>          
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Estado</th>
                            <th>Cidade</th>
                            <th>Bairro</th>
                            <th>Logradouro</th>
                            <th>Complemento</th>
                            <th>CEP</th>
                            <th>Data da busca</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                            require 'database.php';                             
                            require 'loadTable.php';
                        ?> 
                    </tbody>
                </table>
            </div>
            <div class="footer">
                <p><?php require 'footer.php';?></p>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>   
    <script type="text/javascript" src="js/bootstrap-4.1.js"></script>
</html>