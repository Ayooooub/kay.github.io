
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <meta charset="utf-8">
   
    
    
    
    
    
  
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-6asOXdI3HPxSxJzkw0B/Xy+BLIvG2QcXpgH4Ad8aOIWb97+IQz/6ZwUZZFY8U6W5+6d5J6XbN6HRZfLmj1hgw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    
    <style>
   

   .content {
  /* Add styling for your content */
  position: relative;
  z-index: 1;
}
.navbar {
 

  
  align-items: center;

}

@media (max-width: 991.98px) {
  .navbar-brand {
    position:absolute;
    left: 50%;
    transform: translateX(-50%);
  }
.navbar{
    max-height: 500px !important ;
}}
.navbar{
    max-height: 60px;
}

      
    </style>

    
   
</head>
    
    @user




        
    <title>User Profile</title>

    <style>
      
        /* .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 20px auto;
            display: block;
        }
        .username {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 0;
        }
       
        .left-content {
    max-height: 100%;
    background-color: #f8f9fa !important;
   
}

        .right-content {
           
            background-color: #fff;
          
        }
        .spacer {
            width: 1%;
        }
       
    /* Style pour les éléments de formulaire */
    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 50%;
        margin-bottom: 10px;
        box-sizing: border-box;
        font-size: 16px;
    }

    button[type="submit"] {
        background-color:#9cbcd3;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    /* Style pour les éléments de navigation */
    .left-content {
        background-color: 
#a5c2d7!important;
       
        padding: 20px;
        height: 100vh;
    }

    .username {
        margin-top: 10px;
        font-size: 24px;
    }

    .nav-link {
       color: #00308F;
        margin-bottom: 10px;
    }

    .nav-link:hover {
        text-decoration: none;
    }

    /* Style pour les images de profil */
    .profile-picture {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        margin-bottom: 10px;
    }
    #nv2{
      background-color:#9cbcd3 !important;
    }
    #info-link:visited, #password-link:visited ::after{
 
  text-decoration: none;
}
#info-link, #password-link , #picture-link {
  color: blue ;
  text-decoration: none;
}
.active-link {
    color: #9cbcd3 !important;
    text-decoration: none;
  }


.badge{
  color: black  ;
  background-color: #C3D6E4!important;
}

.btn-outline-secondary {
  
  background-color: #C3D6E4;
  border-color: black;
  color: black;
  margin-bottom: 0.1rem;
 

}

.btn-outline-secondary:hover {
  color: #fff;
  background-color:  #6798BB;
}
.btn-outline-secondary:active, 
.btn-outline-secondary.active , 
.btn-outline-secondary:focus{
  
  color: #fff!important;
  background-color: #6798BB !important;
  box-shadow: none !important;
  
}




.card-img-top {
  height: 150px;
  object-fit: cover;
 
}

.card-body{
  font-size: 16px;
  padding: 15px;
  height: 150px;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;

}
.card-title,
.card-subtitle {
  font-size: 16px;
  line-height: 1.1;
  
}

.card-text {
  font-size: 14px;
  line-height: 1.3;
}

.price{
  color: black !important;
  font-weight: bold;
  font-size: 14px !important;
 
  
}

@media screen and (min-width: 1024px) {
  /* CSS styles to apply when the screen is at least 1024px wide */
  
  .logo{
    margin-left: 250%;
  }
}


</style>

   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light " >
      <a class="navbar-brand" href="/home" >
        <img src="storage/images/logo7.png"class="logo" alt="Kay.com logo" style="max-height: 200px;" >
      </a>

        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          
        


      </nav>

<div class="container-fluid">
  <div class="row">
    <!-- Left Navigation Bar -->
    <div class="col-3 bg-primary left-content">
      <img src="{{ asset('storage/profile_pics/' . Auth::user()->profilep) }}" class="profile-picture">
      <h2 class="username">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>
      <ul class="nav flex-column Show">
        <li class="nav-item">
          <a class="nav-link" href="#personal-info"><i class="fas fa-id-card"></i> Mes infos personnelles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#favorites"><i class="fas fa-heart"></i> Voir mes favoris</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#annonce"><i class="fas fa-pencil-alt"></i> Déposer une annonce</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#annonces-deposees"><i class="fas fa-bullhorn"></i> Mes annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout.perform') }}"><i class="fas fa-sign-out-alt"></i> Deconnexion</a>
        </li>
      </ul>
    </div>

    <!-- Spacer Column -->
    <!-- <div class=" spacer"></div> -->
    <!-- Right Content Area -->
    <div class="col-8 right-content">

<div class="info_panel" >
  <div style="display:flex; padding-bottom:30px; margin-top:30px">
  <a href="#info" class="active-link" style="cursor: pointer;" onclick="showInfoForm()" id="info-link">Informations personnells</a>
  <a href="#pwd" style="cursor: pointer; margin-left:50px" onclick="showPasswordForm()" id="password-link">Changer le mot de passe</a>
  <a href="#pic" style="cursor: pointer; margin-left:50px" onclick="showPictureForm()" id="picture-link">Changer la photo de profile</a>

  </div>

  <div id="info-form">
    <form method="POST" action="{{ route('users.update') }}">
      @csrf
      @method('PUT')
      <label for="nom">Nom:</label>
      <input id="nom" type="text" name="nom" value="{{ auth()->user()->nom }}"><br><br>
      <label for="prenom">Prénom:</label>
      <input id="prenom" type="text" name="prenom" value="{{ auth()->user()->prenom }}"><br><br>
      <label for="email">Email:</label>
      <input id="email" type="email" name="email" value="{{ auth()->user()->email }}"><br><br>
      <label for="numtel">Téléphone:</label>
      <input id="numtel" type="tel" name="numtel" value="{{ auth()->user()->numtel }}"><br><br>
      <button type="submit">Enregistrer</button>
    </form>
  </div>

  <div id="password-form" style="display: none;">
    <form method="POST" action="{{ route('users.update-password') }}">
      @csrf
      @method('PUT')
      <label for="old_password">Votre mot de passe actuel:</label>
      <input id="old_password" type="password" name="old_password"><br><br>
      <label for="new_password">Votre nouveau mot de passe:</label>
      <input id="new_password" type="password" name="new_password"><br><br>
      <label for="new_password_confirmation">Confirmer le nouveu mot de passe</label>
      <input id="new_password_confirmation" type="password" name="new_password_confirmation"><br><br>
      <button type="submit">Enregistrer</button>
    </form>
    <form method="POST" action="{{ route('users.delete', ['user' => auth()->user()->id]) }}" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
      @csrf
      @method('DELETE')
      <button type="submit">Suprimmer ce compte </button>
    </form>
  </div>
  <div id="picture-form" style="display: none;">
  <form method="POST" action="{{ route('users.update-picture') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="picture">Choisir une nouvelle photo de profile:</label>
    <input type="file" id="picture" name="picture" accept="image/*"><br><br>
    <button type="submit">Enregistrer</button>
  </form>
</div>

  <script>
    function showInfoForm() {
    var infoLink = document.getElementById("info-link");
    var passwordLink = document.getElementById("password-link");
    var infoForm = document.getElementById("info-form");
    var passwordForm = document.getElementById("password-form");
    var pictureLink = document.getElementById("picture-link");
    var pictureForm = document.getElementById("picture-form");
    // Show the info form and hide the password form
    infoForm.style.display = "block";
    passwordForm.style.display = "none";
    pictureForm.style.display = "none";
    // Add the active-link class to the info link and remove it from the password link
    infoLink.classList.add("active-link");
    passwordLink.classList.remove("active-link");
    pictureLink.classList.remove("active-link");
  }

  function showPasswordForm() {
    var infoLink = document.getElementById("info-link");
    var passwordLink = document.getElementById("password-link");
    var infoForm = document.getElementById("info-form");
    var passwordForm = document.getElementById("password-form");
    var pictureLink = document.getElementById("picture-link");
    var pictureForm = document.getElementById("picture-form");
    // Show the password form and hide the info form
    passwordForm.style.display = "block";
    infoForm.style.display = "none";
    pictureForm.style.display = "none";
    // Add the active-link class to the password link and remove it from the info link
    passwordLink.classList.add("active-link");
    infoLink.classList.remove("active-link");
    pictureLink.classList.remove("active-link");
  }
  function showPictureForm() {
  var infoLink = document.getElementById("info-link");
  var passwordLink = document.getElementById("password-link");
  var pictureLink = document.getElementById("picture-link");
  var infoForm = document.getElementById("info-form");
  var passwordForm = document.getElementById("password-form");
  var pictureForm = document.getElementById("picture-form");

  // Show the picture form and hide the other forms
  pictureForm.style.display = "block";
  infoForm.style.display = "none";
  passwordForm.style.display = "none";

  // Add the active-link class to the picture link and remove it from the other links
  pictureLink.classList.add("active-link");
  infoLink.classList.remove("active-link");
  passwordLink.classList.remove("active-link");
}

  </script>
</div>


<script>
  function toggleForm(formId) {
    var form = document.getElementById(formId + '-form');
    var title = document.getElementById(formId);

    if (form.style.display === "none") {
      form.style.display = "block";
      title.classList.add('selected');
    } else {
      form.style.display = "none";
      title.classList.remove('selected');
    }
  }
</script>




            <div class="fav_panel mt-5">
                <h3 class="mb-5">Mes favoris : </h3>
                <div class="row ">
                  @foreach ($favorite_houses as $house)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a href="/houses/{{ $house->id }}">
                                @if ($house->images->count() > 0)
                                    <img class="card-img-top" src="{{ asset('storage/house_images/'.$house->images->first()->path ) }}" alt="Maison">
                                @endif
                            </a>
                            <div class="card-body">
                                <h6 class="card-title mt-2">{{ $house->type }}</h6>
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <p class="card-text mb-2">
                                            <span class="badge badge-secondary">{{ $house->surface }}m²</span>
                                            <span class="badge badge-secondary">{{ $house->nbpiece }} pièces</span>
                                        </p>
                                    </div>
                                    <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $house->prix }} dh @if($house->type_annonce==='Location')/mois @endif </h6>
                                </div>
                                <h6 class="card-text adresse ">
                                    {{ $house->adresse  }}
                                </h6>
                              
                            </div>
                        </div>
                    </div>
                  @endforeach

                    
                </div>
            </div>
            <div class="annonce_panel">
                <h3>Déposer une annonce de maison</h3>
                <form>
                  <div class="form-group">
                    <label for="title">Titre de l'annonce:</label>
                    <input type="text" class="form-control" id="title" placeholder="Entrez un titre pour votre annonce">
                  </div>
                  <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" rows="5" placeholder="Entrez une description pour votre annonce"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="photos">Images:</label>
                    <input type="file" accept="image/*" multiple>
                  </div>
                  <div class="form-group">
                    <label for="price">Prix:</label>
                    <input type="number" class="form-control" id="price" placeholder="Entrez le prix pour votre annonce">
                  </div>
                  <div class="form-group">
                    <label for="bedrooms">Nombre de chambres:</label>
                    <input type="number" class="form-control" id="bedrooms" placeholder="Entrez le nombre de chambres de votre maison">
                  </div>
                  <div class="form-group">
                    <label for="bathrooms">Nombre de salles de bain:</label>
                    <input type="number" class="form-control" id="bathrooms" placeholder="Entrez le nombre de salles de bain de votre maison">
                  </div>
                  <div class="form-group">
                    <label for="size">Surface :</label>
                    <input type="number" class="form-control" id="size" placeholder="Entrez la taille de votre maison en mètres carrés">
                  </div>
                  <div class="form-group">
                    <label for="location">Emplacement:</label>
                    <input type="text" class="form-control" id="location" placeholder="Entrez l'emplacement de votre maison">
                  </div>

                  <button type="submit" class="btn btn-primary">Déposer l'annonce</button>
                </form>
              </div>
              
            </div>
        </div>
    </div>
    <script>
        // Get the link and the content element
        const link = document.querySelector('a[href="#personal-info"]');
        const content = document.querySelector('.info_panel');
        content.style.display = 'block';
      
        const flink = document.querySelector('a[href="#favorites"]');
        const fcontent = document.querySelector('.fav_panel');
        fcontent.style.display = 'none';
      
        const alink = document.querySelector('a[href="#annonce"]');
        const acontent = document.querySelector('.annonce_panel');
        acontent.style.display = 'none';
      
        // Add event listener to the link
        link.addEventListener('click', () => {
          // Toggle the display of the content element
          if (content.style.display === 'none') {
            content.style.display = 'block';
            fcontent.style.display = 'none';
            acontent.style.display = 'none';
          }
        });
      
        // Add event listener to the link
        flink.addEventListener('click', () => {
          // Toggle the display of the content element
          if (fcontent.style.display === 'none') {
            fcontent.style.display = 'block';
            content.style.display = 'none';
            acontent.style.display = 'none';
          }
        });
      
        // Add event listener to the link
        alink.addEventListener('click', () => {
          // Toggle the display of the content element
          if (acontent.style.display === 'none') {
            acontent.style.display = 'block';
            content.style.display = 'none';
            fcontent.style.display = 'none';
          }
        });
      </script>


       
    @enduser
   

    @admin
<style> 
 body{
	/* width: 100%;
	height: 100vh; */
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}


</style>

    <div class="container-fluid mt-3">
  <h1 style="color: white;">Bienvenue dans votre espace d'administration</h1>
  <p style="color: white;"><b>Vous pouvez gérer les différentes fonctionnalités du Kay à partir du menu de navigation ci-dessus.</b></p>
  <div class="row row-eq-height">
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des annonces</h5>
          <p class="card-text">Créer, modifier et supprimer les demandes des annonces.</p>
          <a href="#" class="btn btn-primary">Gérer les annonces</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des clients</h5>
          <p class="card-text">Créer, modifier, supprimer et ajouter des profils de clients.</p>
          <a href="{{ route('users.show')}}" class="btn btn-primary">Gérer les clients</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des demandes de visites</h5>
          <p class="card-text">Gérer les demandes de visite des propriétés par les clients.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-3 row-eq-height">
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Analytiques</h5>
          <p class="card-text">Afficher les statistiques relatives aux propriétés, telles que le nombre de visites.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des propriétés</h5>
          <p class="card-text">Gérer les informations relatives aux propriétés, ajouter, modifier ou supprimer des biens.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Gestion des transactions immobiliers</h5>
          <p class="card-text">Gérer les contrats, les paiements effectués par les clients et les messages reçus.</p>
          <a href="#" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div>

    @endadmin
    
