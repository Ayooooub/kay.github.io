<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
    
   .card {
  margin-bottom: 30px;
}
/* Change the color of the title and text to blue */
.card-title, .card-text {
  color:black;
}
body{
  background-color: white;


}
.card-subtitle {
  font-size: 20px;
  color: blue;
  margin-left: 30px;
}
.card-body{
    background-color:beige;
}

.blue-box-light {
  background-color: #ADD8E6;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.blue-box-small {
  background-color: #007bff;
  padding: 10px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.white-text {
  color: #fff;
}


/* Make the price, number of rooms, and surface become red on hover */
.card-text:hover {
  color:black;
}

/* Style the number of rooms, surface, and price to become bold and underlined on hover */
.card-text:hover span {
  font-weight: bold;
  text-decoration: underline;
}

.card-img-top {
  height: 225px;
  object-fit: cover;
}

.card-text {
  font-size: 1.1rem;
  line-height: 1.5;
}

.btn-group {
  margin-top: 10px;
}

.btn-outline-secondary {
  color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:hover {
  color: #fff;
  
}
.chat-icon {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #fff;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  z-index: 9999;
}

.chat-icon i {
  color: #333;
  font-size: 28px;
}

.chat-container {
  position: fixed;
  bottom: 80px;
  right: 20px;
  width: 300px;
  height: 400px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  display: none;
  z-index: 9998;
}

.chat-header {
  padding: 10px;
  background-color: #f5f5f5;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.chat-header h3 {
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.close-btn {
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.close-btn i {
  color: #333;
  font-size: 18px;
}

.chat-body {
  height: 300px;
  overflow-y: scroll;
  padding: 10px;
}

.chat-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-top: 1px solid #eee;
}

.chat-footer input {
  border: none;
  padding: 10px;
  width: 100%;
  border-radius: 3px;
  margin-right: 10px;
  font-size: 14px;
  outline: none;
}

.chat-footer button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding:5px 10px;
  border-radius: 3px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.chat-footer button:hover {
background-color: #0069d9;
}
.chat-icon {
  position: fixed;
  bottom: 30px;
  right: 30px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: #0069d9;
  cursor: pointer;
  animation: bounce 1s ease infinite alternate;
}

@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-10px);
  }
}

 </style></head>
 <body style="background-color: #d0dfee;">
    <div class="chat-icon">
        <i style="color: white;" class="fas fa-comment-alt"></i>
      </div>
      
      <div class="chat-container">
        <div class="chat-header">
          <h3> Kay, votre assistant virtuel</h3>
          <button class="close-btn"><i class="fas fa-times"></i></button>
        </div>
        <div class="chat-body">
          <!-- Chat messages will be displayed here -->
        </div>
        <div class="chat-footer">
          <input type="text" placeholder="Type your message...">
          <button class="send-btn"><i class="fas fa-paper-plane"></i></button>
        </div>
      </div>
      <script>
  const chatIcon = document.querySelector('.chat-icon');
  const chatContainer = document.querySelector('.chat-container');
  const closeBtn = document.querySelector('.close-btn');
  const sendBtn = document.querySelector('.send-btn');
  const chatBody = document.querySelector('.chat-body');
  const inputField = document.querySelector('input');
  
  let isChatOpen = false;
  
  // Toggle the visibility of the chat container
  chatIcon.addEventListener('click', () => {
    isChatOpen = !isChatOpen;
    if (isChatOpen) {
      chatContainer.style.display = 'block';
    } else {
      chatContainer.style.display = 'none';
    }
  });
  
  // Close the chat container when the close button is clicked
  closeBtn.addEventListener('click', () => {
    isChatOpen = false;
    chatContainer.style.display = 'none';
  });
  
  // Send a message when the send button is clicked
  sendBtn.addEventListener('click', () => {
    const message = inputField.value;
    sendMessage(message);
  });
  
  // Send a message when the enter key is pressed
  inputField.addEventListener('keypress', (event) => {
    if (event.key === 'Enter') {
      const message = inputField.value;
      sendMessage(message);
    }
  });
  
  // Send a message to the chatbot and receive a response
  function sendMessage(message) {
    if (message.trim() === '') {
      return;
    }
    const chatMessage = document.createElement('div');
    chatMessage.classList.add('chat-message', 'outgoing');
    chatMessage.textContent = message;
    chatBody.appendChild(chatMessage);
    inputField.value = '';
    setTimeout(() => {
      const response = getResponse(message);
      const chatMessage = document.createElement('div');
      chatMessage.classList.add('chat-message', 'incoming');
      chatMessage.textContent = response;
      chatBody.appendChild(chatMessage);
      chatBody.scrollTop = chatBody.scrollHeight;
    }, 1000);
  }
  
  // Get a response from the chatbot based on the user's message
  function getResponse(message) {
    const keywords = {
      acheter: "Chez nous, l'achat de votre propriété idéale est facile ! Que vous cherchiez une maison, un appartement ou un terrain, sélectionnez simplement le type de bien dans le menu en haut, ou remplissez le formulaire d'achat à l'accueil pour trouver la perle rare.",
      vendre: "Vous souhaitez vendre votre bien rapidement et efficacement ? C'est facile avec Kay! Commencez par sélectionner le type de bien dans le menu en haut,puis continuez en remplissant notre formulaire détaillé pour décrire les caractéristiques de votre bien.",
      louer: 'Vous cherchez un logement à louer ? Kay en ligne vous simplifie la vie ! Il vous suffit de sélectionner le type de bien que vous recherchez dans le menu en haut, puis de remplir notre formulaire de demande de location pour nous faire part de vos critères.',
    };
    const words = message.toLowerCase().split(' ');
    for (const word of words) {
      if (keywords[word]) {
        return keywords[word];
      }
    }
    return "I'm sorry, I didn't understand your message.";
  }
  
      </script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>Kay.com</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Acceuil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Conseils & Articles
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <a class="dropdown-item" href="#">Actualités</a>
            <a class="dropdown-item" href="#">Articles</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Conseils</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Acheter
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="#">Maisons</a>
            <a class="dropdown-item" href="#">Appartements</a>
            <a class="dropdown-item" href="#">Immeubles</a>
            
            <a class="dropdown-item" href="#">Terrains</a>
            
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Louer
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="#">Maisons</a>
            <a class="dropdown-item" href="#">Appartements</a>
            <a class="dropdown-item" href="#">Immeubles</a>
            
            <a class="dropdown-item" href="#">Terrains</a>
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vendre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Estimer</a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li  class="nav-item"  ><a class="nav-link"><i class="fas fa-heart" >
        </i>         Mes favoris   </a></li>
        <li class="nav-item">
          <a class="nav-link" href="seconnecter.php"><i class="fas fa-user"></i>  Se connecter</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container" style="margin-top: 20px;">
    <h1 style="font-size: 36px;">Découvrez toutes nos maisons à l'achat</h1>
    
    <p style="font-size: 20px; margin-top: 25px; ">
    Vous êtes à la recherche d'une maison à acheter,vous êtes au bon endroit. Nous proposons une sélection de maisons à vendre dans différentes régions, 
    adaptées à tous les budgets. Que vous cherchiez une maison familiale spacieuse, une maison de ville ou un petit pied-à-terre,
    notre sélection saura répondre à vos besoins. Nous sommes là pour vous aider à trouver votre maison de rêve!</p>
    <div class="row" style="margin-top: 40px;">
        @foreach ($houses as $item)
            <div class="col-md-4" >
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('uploads/houses/'.$item->image ) }}" alt="Maison">
                <div  class="card-body">
                    <h5 class="card-title d-inline-block align-middle">{{ $item->type }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted d-inline-block align-middle ml-5">{{   $item->prix    }} DH</h6>
                    <p class="card-text mt-3">
                    <span class="badge badge-secondary mr-2">{{ $item->nbpiece }} pièces</span>
                    <span class="badge badge-secondary mr-2">{{ $item->surface }}m²</span>
                   
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="btn-group">
                        <a href="#" class="btn btn-sm btn-outline-secondary">Voir</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter aux favoris</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
      
  </div>
  



 </body>

</html>