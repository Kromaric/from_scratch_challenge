<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Père Noel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("nav.php")?>
    <div class="container-fluid mt-5">
        <div class="row my-5">
            <!-- Formulaire d'estimation -->
        <form action="" method="post"></form>
                <h1 class="form-title text-center">Formulaire d'estimation</h1>
            <div class="row my-5">
                <div class="col-md-6">
                <div class="input-group mb-3">
                        <span class="input-group-text" >Le nombre de cadeux</span>
                        <input type="number" class="form-control" id="montant" name="nom" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Montant Moyen</span>
                        <input type="number" class="form-control" id="qte" name="nom" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="alert alert-warning">
                      Le Montant total est d'environ : <p id="total"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>

            <div>            <button type="button" onclick='calcul()' class="btn btn-primary">valider</button>
            </div>
        </form>  
        </div>


    </div>

    <script src="calculateur.js"></script>
    <?php include("footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>