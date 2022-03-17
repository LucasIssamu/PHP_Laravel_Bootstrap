<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 5</title>
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
<form action="/Resultado5" method="post">
    @csrf
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <label for="nota1" class="label-control"><strong>INFORME A NOTA DA P1</strong></label>
                    <input type="number" name="nota1" class="form-control" placeholder="0" required>
                </div>

                <div class="col-md">
                    <label for="nota2" class="label-control"><strong>INFORME A NOTA DA P2</strong></label>
                    <input type="number" name="nota2" class="form-control" placeholder="0" required>
                </div>

                <div class="col-md">
                    <label for="nota3" class="label-control"><strong>INFORME A NOTA DA P3</strong></label>
                    <input type="number" name="nota3" class="form-control" placeholder="0" required>
                </div>

                <div class="col-md">
                    <label for="nota4" class="label-control"><strong>INFORME A NOTA DA P4</strong></label>
                    <input type="number" name="nota4" class="form-control" placeholder="0" required>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md text-center">
                    <button class="btn btn-dark" type="submit">
                        Calcular
                    </button>

                    <p class="lead text-start pt-3">
                        Desenvolva um programa que receba quatro notas de um aluno, calcule e
                        imprima a média aritmética das notas e a mensagem de aprovado para média
                        superior ou igual a 7,0 ou a mensagem de reprovado para média inferior a 7,0.
                    </p>
                </div>
            </div>
        </div>
    </section>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

