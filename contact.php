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
        <div class="row " id="contact">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row my-5 mx-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-10  text-secondary ">
                        <div class="text-center">
                            <h1><b>Contactez le Père Noël</b></h1>

                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="60" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="60" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8"/>
                            </svg>
                        </div>
                        
                        <!-- Formulaire de contact -->
                        
                        <form action="back.php" method="post">
                            <div class="mb-3 ">
                                <label for="Nom" class="form-label" >Nom</label>
                                <input type="text" class="form-control" name="Nom" required>
                            </div>
                            <div class="mb-3 ">
                                <label for="Prenom" class="form-label" >Prenom</label>
                                <input type="text" class="form-control" name="Prenom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> Addresse Mail</label>
                                <input type="mail" class="form-control" id="email" name="Mail" required>
                            </div>
                            <div class="mb-3">
                                
                                <select class="form-select" name="Sujet"  aria-label="Default select example">
                                    <option selected>Sujet</option>
                                    <option value="1">Demande de cadeaux</option>
                                    <option value="2">Renseignements</option>
                                    <option value="3">Prise de rendez-vous</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Commentaire" class="form-label">Commentaire</label>
                                <textarea class="form-control" id="Commentaire" rows="3" name="Commentaire" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Envoyer</button>

                        </form>
                        
                        
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>


<?php include("footer.php")?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>