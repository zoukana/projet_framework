<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="accueil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/bootstrap/dist/js/bootstrap.js">
    <link rel="stylesheet" href="/bootstrap/scss/bootstrap.scss">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<!-- background-color:RGB(51, 21, 15) -->
<!-- style="background-color:rgba(156, 156, 163, 1)" -->

<body style="background-color:rgba(156, 156, 163, 1)">
    <a href="admin.php"><span class="material-symbols-outlined">
            keyboard_return
        </span></a>
    <div class="container border-danger bg-white pt-1">
        <div class="container admin col-lg-12 mt-5">
            <div class="row text-white btn-lg text-center mt-2" style="background-color:RGB(51, 21, 15)">
                <span class="d-flex justify-content-center">
                    <!-- pour l'affichage sur le profil -->
                    <span class="col-1 ">
                        hgff
                    </span>

                    <span class="d-flex  mt-4  w-50" style="max-height: 2rem;">
                       nom prenom
                        <span style="margin-left: 4rem">
                            <h4><a href="('archive')" class="text-white">liste des archives</a> </h4>
                        </span>
                    </span>

                    <div class="ml-auto  mt-3 " style="margin-left:auto;max-height: 2.5rem;">
                        <form class="d-flex" action="/search" method="Get" role="search">
                            {{ csrf_field() }}
                            <input class="form-control me-2" name="search" type="text" placeholder="Rechercher..."
                                aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </form>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <a href="connexion.php" class="mt-1"><i class="bi bi-box-arrow-right text-white "
                            style="font-size:40px;"></i></a>

                </span>
            </div>

            <h1 class="d-flex justify-content-center">Espace Administrateur</h1>

            <div class="row">
                <table class="table table-striped table-bordered border border-4 border-dark">
                    <thead class="text-white btn-lg text-center border border-4 border-dark"
                        style="background-color:rgba(174, 115, 74, 1)">
                        <tr class="border border-4 border-dark">
                            <th scope="col" class="border border-4 border-dark">Nom</th>
                            <th scope="col" class="border border-4 border-dark">Prenom</th>
                            <th scope="col" class="border border-4 border-dark">Email</th>
                            <th scope="col" class="border border-4 border-dark">Matricule</th>
                            <th scope="col" class="border border-4 border-dark">Role</th>
                            <th scope="col" class="border border-4 border-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>


                            <tr>


                                 <tr  scope="row">
                                <td class="border border-4 border-dark"></td>
                                <td class="border border-4 border-dark"></td>
                                <td class="border border-4 border-dark"></td>
                                <td class="border border-4 border-dark"></td>
                                <td class="border border-4 border-dark"></td>

                                <td class= "border border-4 border-dark">

                                    <span style="display:flex; justify-content:space-between;font-size:30px;">
                                  <a title="modifer" onclick= "return confirm(\'voulez vous vraiment modifier?\')" href="modifier.php?matricule=' . $data['matricule'] . '"><i class="bi bi-pencil-square text-dark "></i></a>
                                    <a onclick= "return confirm(\'voulez vous vraiment archiver?\')" href="traitement_archive.php?matricule=' . $data['matricule'] . '"><i class="bi bi-archive-fill text-dark"></i></a>
                                    <a href="changer.php?matricule=' . $data['matricule'] . '"><i class="bi bi-arrow-repeat text-dark"></i></a>
                                    </span>

                                    </td>



                                </tr>

                                 <tr>


                                         <tr  scope="row">
                                        <td class="border border-4 border-dark"></td>
                                        <td class="border border-4 border-dark"></td>
                                        <td class="border border-4 border-dark"></td>
                                        <td class="border border-4 border-dark"></td>
                                        <td class="border border-4 border-dark"></td>

                                        <td class= "border border-4 border-dark">

                                            <span style="display:flex; justify-content:space-between;font-size:30px;">
                                          <a onclick= "return confirm(\'voulez vous vraiment modifier?\')" href="modifier.php?matricule=' . $a['matricule'] . '"><i class="bi bi-pencil-square text-dark "></i></a>
                                            <a onclick= "return confirm(\'voulez vous vraiment archiver?\')" href="traitement_archive.php?matricule=' . $a['matricule'] . '"><i class="bi bi-archive-fill text-dark"></i></a>
                                            <a href="changer.php?matricule=' . $a['matricule'] . '"><i class="bi bi-arrow-repeat text-dark"></i></a>
                                            </span>

                                            </td>



                                        </tr>


                        </tr>

                    </tbody>
                </table>

            </div>

        </div>
</body>

</html>