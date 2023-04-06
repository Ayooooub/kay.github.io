<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
    
body{
  background-color: #eeeeee;
}

.card {
  margin-bottom: 30px;
}
/* Change the color of the title and text to blue */
.card-title, .card-text {
  color:black;
}

.price{
  color: #4E5E69 !important;
  

}


.white-text {
  color: #fff;
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

.badge{
  color: black;
  background-color: #EBF1F6;
}
.btn-outline-secondary {
  
  background-color: #C3D6E4;
  border-color: black;
  color: black;
  font-weight: bold;
}

.btn-outline-secondary:hover {
  color: #fff;
  background-color:  #9cbcd3;
}
.btn-outline-secondary:active, 
.btn-outline-secondary.active , 
.btn-outline-secondary:focus{
  
  color: #fff!important;
  background-color: #9cbcd3 !important;
  box-shadow: none !important;

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
.chat-container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  max-width: 500px;
  margin: 20px auto;
  font-family: Arial, sans-serif;
}

.chat-header {
  background-color: #007bff;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.chat-body {
  padding: 10px;
  max-height: 400px;
  overflow-y: scroll;
}

.chat-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

.chat-footer input[type="text"] {
  flex-grow: 1;
  padding: 10px;
  border-radius: 20px;
  border: none;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
  margin-right: 10px;
}

.chat-footer button {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 20px;
  padding: 10px 20px;
  cursor: pointer;
}
.chat-message.outgoing {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.chat-message.outgoing i {
  margin-right: 8px;
}

.chat-message.incoming {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.chat-message.incoming i {
  margin-right: 8px;
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
.chat-bubble {
  margin-bottom: 10px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
}

.chat-bubble.outgoing {
  justify-content: flex-end;
}

.chat-bubble.incoming {
  justify-content: flex-start;
}

.chat-message {
  padding: 8px 12px;
  border-radius: 20px;
  font-size: 16px;
  line-height: 1.4;
  max-width: 70%;
  word-wrap: break-word;
  position: relative;
}

.chat-message.outgoing {
  background-color: #2979ff;
  color: #fff;
  margin-right: 8px;
}

.chat-message.incoming {
  background-color: #f3f3f3;
  color: #333;
  margin-left: 8px;
}

.chat-message:after {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-top: 12px solid transparent;
  border-bottom: 12px solid transparent;
  border-right: 12px solid #2979ff;
  top: 50%;
  margin-top: -12px;
}

.chat-message.outgoing:after {
  right: -10px;
}

.chat-message.incoming:after {
  left: -10px;
  border-right-color: #f3f3f3;
  border-left: 12px solid transparent;
}


 </style></head>
 <body >
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
  
  function sendMessage(message) {
  if (message.trim() === '') {
    return;
  }

  // Create outgoing message element with icon and chat bubble design
  const chatMessage = document.createElement('div');
  chatMessage.classList.add('chat-message', 'outgoing');
  const icon = document.createElement('i');
  icon.classList.add('fas', 'fa-user');
  chatMessage.appendChild(icon);
  const text = document.createElement('span');
  text.textContent = message;
  chatMessage.appendChild(text);
  const chatBubble = document.createElement('div');
  chatBubble.classList.add('chat-bubble', 'outgoing');
  chatBubble.appendChild(chatMessage);
  chatBody.appendChild(chatBubble);

  inputField.value = '';

  setTimeout(() => {
    const response = getResponse(message);

    // Create incoming message element with icon and chat bubble design
    const chatMessage = document.createElement('div');
    chatMessage.classList.add('chat-message', 'incoming');
    const icon = document.createElement('i');
    icon.classList.add('fas', 'fa-robot');
    chatMessage.appendChild(icon);
    const text = document.createElement('span');
    text.textContent = response;
    chatMessage.appendChild(text);
    const chatBubble = document.createElement('div');
    chatBubble.classList.add('chat-bubble', 'incoming');
    chatBubble.appendChild(chatMessage);
    chatBody.appendChild(chatBubble);
    chatBody.scrollTop = chatBody.scrollHeight;
  }, 1000);
}


  
  // Get a response from the chatbot based on the user's message
  function getResponse(message) {
    const keywords = {
      acheter: "Chez nous, l'achat de votre propriété idéale est facile ! Que vous cherchiez une maison, un appartement ou un terrain, sélectionnez simplement le type de bien dans le menu en haut, ou remplissez le formulaire d'achat à l'accueil pour trouver la perle rare.",
      vendre: "Vous souhaitez vendre votre bien rapidement et efficacement ? C'est facile avec Kay! Commencez par sélectionner le type de bien dans le menu en haut,puis continuez en remplissant notre formulaire détaillé pour décrire les caractéristiques de votre bien.",
      louer: 'Vous cherchez un logement à louer ? Kay en ligne vous simplifie la vie ! Il vous suffit de sélectionner le type de bien que vous recherchez dans le menu en haut, puis de remplir notre formulaire de demande de location pour nous faire part de vos critères.',
      bonjour: "bonjour, comment je peux vous aider",
      bonsoir: "bonsoir, comment je peux vous aider"
    };
    const words = message.toLowerCase().split(' ');
    for (const word of words) {
      if (keywords[word]) {
        return keywords[word];
      }
    }
    return "Désolé,utilise les keywords acheter vendre louer.";
  }
  
      </script>

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>Kay.com</b></a>
            
          
  </nav>
  <div class="container" style="margin-top: 20px;">
    
    
    
    <div class="row" style="margin-top: 40px;">
        @foreach ($houses as $item)
            <div class="col-md-4" >
                <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('uploads/houses/'.$item->image ) }}" alt="Maison">
                <div  class="card-body">
                    <h6 class="card-title d-inline-block align-middle">{{ $item->type }}</h5>
                    <div class="float-right">
                        <h6 class="card-subtitle mb-2 text-muted d-inline-block align-middle price text-right" >{{   $item->prix    }} DH</h6>
                    </div>
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