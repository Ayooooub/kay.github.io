@extends('layouts.auth-master')

@section('content')
<head>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <title>Image Slider</title>
    <style>

        .slider {
            width: 90%;
            height: 400px;
            position: relative;
            overflow: hidden;
            
            border-radius: 15px;
            /* margin-right: 20px; */
        }

        .slide {
            
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        
        /* Add this style for the house type */
        .house-type {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
          margin-top: 10%;
        }
        .location {
       display: flex;
       align-items: center;
   }
   /* CSS */
.fixed-bottom {
  height: 70px;
  border-top: 1px solid #ccc;
  background-color: #fff;
}
.symbol{
  color: #7dbad8;


}
.lolo{
  color: #7dbad8;
}
   .location h3 {
       margin: 0 10px 0 0;
   }
   .fa-map-marker {
       color: blue;
       font-size: 24px;
   }
   #pin{
    color:  rgb(132, 179, 241);
       font-size: 24px;
   }
   /* CSS */
   
   .back-button{
      background-color: transparent ;
      color: black;
      border:  none;

   }
   .back-button:active, 
   .back-button.active , 
   .back-button:focus{
    background-color: #6999BB !important;
    color: #fff!important;
    border: none !important;
    box-shadow: none !important;
   }

    .back-button:hover{
      background-color: #6999BB;
      color: #fff;
      border: none;
    }
    button.btn-light:hover {
      background-color: #6999BB;
      border: none!important;
      color: #fff;
}

    .send-button{
      background-color:  #6999BB ;
      color:    #fff;
      border: none;

   }

   .send-button:hover{
    background-color: #5E89A8;
    color: #fff;
    border: none;
  }
   .send-button:active, 
   .send-button.active , 
   .send-button:focus{
    background-color: #6999BB !important;
    color: #fff!important;
    border: none !important;
    box-shadow: none !important;
   }
a.text-decoration-none {
  text-decoration: none;
}

a.text-decoration-none:hover {
  color: your-desired-color;
}

   @media (max-width: 768px) {
          .house-type {
            position: relative;
            top: 20px;
          }
          .slider{
            width: 110%;
          }
        }
        
    </style>
</head>
<body>
  
      <div class="d-sm-block d-md-none fixed-bottom">
        <div class="content">
          <div class="row justify-content-between align-items-center" style="margin-top: 10px;">
            <div class="col-5">
              <button class="btn btn-primary btn-block py-3">
                <i class="fas fa-phone-alt"></i> Call
              </button>
            </div>
            <div class="col-5">
              <button class="btn btn-primary btn-block py-3">
                <i class="fas fa-comment-alt"></i> Message
              </button>
            </div>
          </div>
        </div>
      </div>
      
    <!-- Add the house type div -->
    <div class="container">

      <div class="row align-items-center mt-2">
        <div class="col">
        <form action="{{ url()->previous() }}" method="get">
          <button type="submit" class="btn btn-primary back-button" >
            <i class="bi bi-chevron-left"></i>  Retour aux résultats
          </button>
        </form>

        </div>
        <div class="col-auto">
          <button class="btn btn-light mt-2 write" style="border: 1px solid black; padding: 6px 12px; font-size: 16px;" onclick="scrollToForm()">
            <span class="d-none d-md-inline"><i class="bi bi-envelope-fill"></i> Ecrire à l'agence</span>
            <span class="d-md-none"><i class="bi bi-envelope-fill"></i></span>
          </button>
          
            <button class="btn btn-light mt-2" style="border: 1px solid black; padding: 6px 12px; font-size: 16px;">
              <span class="d-none d-md-inline"><i class="far fa-heart"> </i></span>
              
            </button>
            
        </div>
        
    </div>
    
        <div class="row">
          <div class="col-md-8">
          <div class="slider" style="margin-top: 3%;">
            @foreach($images as $image)
            <div class="slide @if($loop->first) active @endif">
                <img src="{{ asset('storage/land_images/' . $image->path) }}" alt="{{ $image->name }}" width="100%" height="100%" loading="lazy" class="slider-img">
            </div>
            @endforeach
        
              <!-- The arrows to control the slide transition -->
              <span class="arrow back" onclick="prevSlide()">&#10094;</span>
              <span class="arrow next" onclick="nextSlide()">&#10095;</span>
              </div>
         
          </div>
          <div class="col-md-4">
            <div class="house-type" style="font-size: 36px; color: #777; margin-bottom: 30px; font-weight: bold; font-style:inherit;">
              <h2>{{ $land->type }}  à vendre </h2>

              <h2 > {{ $land->surface }} m²</span></h2>
              <div class="location col-5" style="margin-top: 30px;">
                <i class="bi bi-geo-alt-fill" id="pin" style="margin-right: 10px;"></i>

                <h3 >{{ $land->adresse }}</h3>
              </div>
              <div class="price " style="color: #7dbad8; margin-top: 20px;" >
                <h2 >{{ $land->prix }} DH</h2>
              </div>
            </div>
          </div>
          
          
        </div>
      
      
            </div>
            
          
          <div class="col-md-4 bg-light " style="margin-bottom: 30px; float:right;  margin-right: 20px;"  >
            <form id="contact-form"  onsubmit="alert('Votre demande a bien été envoyée à l\'agence Urban Success.');" >
              <h3 class="mt-3">Ce bien vous intéresse ?</h3>
              Contactez vite l'agence pour le visiter !
              <div class="mb-3">
                <label for="prenom" class="form-label">Prénom:</label>
                <input type="text" class="form-control" id="pre" required>
              </div>
              <div class="mb-3">
                <label for="nom" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="nom" required>
              </div>
              
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email1" required>
              </div>
              <div class="mb-3">
                <label for="Téléphone" class="form-label" >Téléphone:</label>
                <input type="tel" class="form-control" id="tel1" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              
              <div class="mb-2">
                <label class="form-label">Vous préférez être contacté par :</label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="contact" id="email" value="email">
                  <label class="form-check-label" for="email">Email</label>
                  <input class="form-check-input "style="margin-left:10px;" type="radio" name="contact" id="telephone" value="telephone">
                  <label class="form-check-label" for="telephone"> Téléphone </label>
                </div>
              </div>
              
  
              <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary send-button mb-3" >Ecrire à l'agence</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      
      
      
      
      
      
    <script>
      function scrollToForm() {
  var form = document.getElementById("contact-form");
  form.scrollIntoView({behavior: "smooth"});
}
        // Get all slide elements
        const slides = document.querySelectorAll(".slide");

        // Function to show the nth slide
        function showSlide(n) {
            // Hide all slides
            for (let slide of slides) {
                slide.classList.remove("active");
            }
            // Show the nth slide
            slides[n].classList.add("active");
        }

        let slideIndex = 0;
        showSlide(slideIndex);

        // Function to show the next slide
        function nextSlide() {
            slideIndex++;
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            showSlide(slideIndex);
        }

        // Function to show the previous slide
        function prevSlide() {
            slideIndex--;
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }
            showSlide(slideIndex);
        }
    </script>
</body

   
  @endsection