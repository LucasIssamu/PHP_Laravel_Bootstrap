<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 3</title>
</head>
<body>

<!-- Barra do Menu -->
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

        <!-- Itens do Menu -->
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

<!-- Formulário -->
<form action="/Resultado3" method="post">
    @csrf
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex align-items-center justify-content-between">
                <div class="row">
                    <div class="col-md-3">
                        <label for="valor" class="label-control"><strong>INFORME UM VALOR</strong></label>
                        <input type="number" name="valor" class="form-control" placeholder="Informe um valor" required>
                    </div>
                    <div class="col-md-9">
                        <p class="lead">
                            Desenvolva um programa que receba um valor digitado pelo usuário e imprima o texto
                            "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <button class="btn btn-dark" type="submit">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </section>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
