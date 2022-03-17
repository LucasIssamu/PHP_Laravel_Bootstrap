<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 2</title>
</head>
<body>

    <!-- Barra do Menu-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="/" class="navbar-brand text-warning">Exercícios de PHP</a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Itens do Menu-->
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="exercicio1" class="nav-link"> Exercício 1</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/exercicio2" class="nav-link"> Exercício 2</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="exercicio3" class="nav-link"> Exercício 3</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="exercicio4" class="nav-link"> Exercício 4</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="exercicio5" class="nav-link"> Exercício 5</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>


    <!-- Formulario -->
    <form action="/Resultado2" method="post">
        @csrf
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="row">
                    <p class="lead">
                        Faça um programa que receba o valor do quilo de um produto e a quantidade de
                        quilos do produto consumida, calculando o valor final a ser pago.
                    </p>
                    <div class="col-6">
                        <label for="valor_pago" class="label-control"><strong>VALOR DO KILO DO PRODUTO</strong></label>
                        <input type="number" name="valor_kilo" class="form-control" placeholder="R$0.00/kg" required>
                    </div>

                    <div class="col-6">
                        <label for="valor_produto" class="label-control"><strong>QUANTIDADE DE KILOS</strong></label>
                        <input type="number" name="qntd_kilo" class="form-control" placeholder="0.00kg" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col pt-5">
                        <button class="btn btn-dark" type="submit">
                            Calcular
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
