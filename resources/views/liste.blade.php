<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">



    <title>List</title>
</head>

<body>
    <!-- le header  -->
    <div class="row teta">
        <div class=" col-md-3 offset-md-1 col-sm-3 logo1">
            <img src="../image/Logo.png" alt="">
        </div>
        <div class=" col-md-5 col-sm-3 texte">
            <h1>Gestion des abonnés</h1>
        </div>

    </div>
    <div class="row titi">

    </div>


    </div>


    <!-- le tableau des abonnes  -->

    <div class="container-fluid tableau d-flex justify-content-center">


        <div class=" col-md-12 d-flex moov  justify-content-between">

            <div class="compteur col-md-1 col-sm-2 ms-3  text-center text-light bg-success">
            <a href="{{route('abonne.create') }}" class=' col-md-1 col-sm-2  text-center text-light'>Ajouter</a>
            </div>
            
            <div class="compteur col-md-1 col-sm-2 me-3  text-center text-light bg-danger">

                <a href="{{ route('home') }}" class=' col-md-1 col-sm-2  text-center text-light'>Fermer</a>
            </div>

        </div>



        <div class="row table">
            <div class="col-md-12 bordure">


                
                <table class="table table-striped-row">
                  
                        <tr>
                            <th scope="col" class="compt">No</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Date de naissance</th>
                            <th scope="col">Numero de telephone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Debut d\'abonnement</th>
                            <th scope="col">fin d\'abonnement</th>
                            
                        </tr>
                        
                @foreach($abonnes as $Abonne)
                
                    <tr >
                        <td class='compt'>{{$loop->index+1}} </td> 
                        <td> {{$Abonne->nom}} </td>
                        <td> {{$Abonne->prenom}}</td>
                        <td> {{$Abonne->date_naissance}}</td>
                        <td> {{$Abonne->telephone}}</td>
                        <td> {{$Abonne->email}}</td>
                        <td> {{$Abonne->created_at}}</td>
                        <td> {{$Abonne->fin_abonnement}}</td>
                @endforeach
                
            </table>











            </div>

        </div>


    </div>

    </div>





    <!-- le footer ok -->
    <div class="container-fluid footer">
        <div class="row foot">
            <div class="col-md-1">
                <p class="p1">www.auf.org</p>
            </div>
            <div class=" col-md-6 offset-md-1">
                <p class="p2">2022 &copy; Tous droits réservés</p>

            </div>

        </div>
    </div>

</body>

</html>