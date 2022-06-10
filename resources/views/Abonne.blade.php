<!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">



     <title>abonnee</title>
 </head>

 <body>

     <!-- le header  -->
     <div class="container-fluid tete">
         <div class="row teta">
             <div class=" col-md-3 offset-md-1 logo1">
                 <img src="{{asset('image/Logo.png')}}" alt="">
             </div>
             <div class=" col-md-8 texte">
                 <h1>Gestion des abonnés</h1>
             </div>
         </div>
     </div>
     @if(session()->has('success'))
             <div class="bg-success fs-4 fw-bold text-center col-md-6 offset-md-3" style="height:40px">
            {{session()->get('success')}}
            </div>
            @endif
     <div class="container-fluid formu">
         <div class=" row fofo">
           

             <div class=" col-md-12 format">
                 <div class="inser">
                     <form action="{{route('abonne.store')}}" method="POST">
                         @csrf 
                         @method('POST')
                         
                         <input type="text" placeholder="nom" class="inputnom" name="nom"><br>
                         
                         <input type="text" placeholder="prenom" class="inputnom" name="prenom"><br>
                        
                         <input type="date" placehoder="date_n" class="inputdaten" name="date_naissance"><br>
                         
                         <input type="number" placeholder="telephone" class="inputtel" name="telephone"><br>
                         
                         <input type="email" placeholder="email" class="inputmail" name="email"><br />
                         
                         <input type="date" placeholder="fin_d_ab" class="inputdated" name="fin_abonnement"><br>
                         
                    
                 </div>
                 <div class="forma1">
                     <div class=" col-md-1 offset-md-4 coca1"><img src="{{asset('image/im1.jpg')}}"></div>
                     <div class="coca">
                         <div class="spa">
                              <span>
                                   <button type="submit" value="Valider" name="valider" id="valider">Ajouter</button>
                            </span> </form>
                          <span>
                              <a href="{{route('home') }}"> <button value="Annuler" name="annuler" id="annuler">Fermer</button>

                              </a>
                        </span>
                    </div>
                     </div>
                     <a href="{{route('abonne.index')}}" class="list"> <button type="submit" value="Lister" name="lister" id="Lister">Lister</button></a>
                 </div>
                
             </div>
         </div>
     </div>

     </div>

     <!-- le footer  -->
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