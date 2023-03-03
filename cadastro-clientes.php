<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="vh-100 d-flex align-items-center">
    <div class="container mb-5">
        <div class="row">
            <div class="col-8 mx-auto align-self-center">
                <h3 class="text-center">Cadastro de clientes</h3>
                <div class="row mt-1">
                    <div class="col-4">
                        <input type="text" name="código=" class="form-control" placeholder="código *">
                    </div>
                    <div class="col-4">
                        <input type="text" name="cpf=" class="form-control" placeholder="CPF *">
                    </div>
                    <div class="col-4">
                        <input type="text" name="rg=" class="form-control" placeholder="RG *">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-6">
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone *">
                    </div>
                    <div class="col-6">
                        <input type="text" name="celular" class="form-control" placeholder="Celular *">
                    </div>
                </div>

                <div class="row mt-1">
                    <div class="col-10">
                        <input type="text" name="endereco" class="form-control" placeholder="Endereço *">
                    </div>

                    <div class="col-2">
                        <input type="text" name="numero" class="form-control" placeholder="Número *">
                    </div>
                </div>


                <div class="row mt-1">
                    <div class="col-5">
                        <input type="text" name="bairro" class="form-control" placeholder="Bairro *">
                    </div>



                    <div class="col-5">
                        <input type="text" cidade="bairro" class="form-control" placeholder="Cidade *">
                    </div>

                    <div class="col-2 mt-1">
                        <select name="uf" class="form-select">
                            <option selected>UF</option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>MG</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cliente-ativo" id="cliente-a">

                            <label class="form-check-label" for="cliente-a">
                                Cliente ativo
                            </label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-check">
                            <input class="form-check-input" value="ativo" type="radio" name="cliente-ativo" 
                            id="cliente-i" 
                            checked>
                          
                                Cliente inativo
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="from-check">
                            <input class="form-check-input" name="premium" type="checkbox" value="premium" 
                            id="premium">
                            <label class="form-check-label" for="premium">
                                Cliente premium
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg w-25 mt-3">Cadastrar</button>
            </div>
        </div>

    </div>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>