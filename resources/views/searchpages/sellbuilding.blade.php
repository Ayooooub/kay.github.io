@extends('layouts.auth-master')

@section('content')

<style>
      
                body{
                  background-color: #E7EEF4;


                }
                .form-signup {
                  background-color: #fff;
                  border-radius: 20px;
                  padding: 20px;
                  margin-top: 20px;
                  box-shadow: 0px 10px 30px 0px rgba(0,0,0,0.1);
                }
                .form-signup h2 {
                  text-align: center;
                  margin-bottom: 30px;
                }
                .form-signup input[type="text"],
                .form-signup input[type="email"],
                .form-signup input[type="number"],
                .form-signup input[type="file"],
                .form-signup input[type="checkbox"]
               {
                  border-radius: 10px;
                  margin-bottom: 20px;
                  padding: 10px;
                }

                .form-check{
                  margin-right : 10px;
                 
                  padding: 5px;
                  margin-left: 25px;
                }

                .form-signup button[type="submit"] {
                  background-color: #6999BB;
                  border: none;
                  color: #fff;
                  border-radius: 10px;
                  padding: 10px 10px;
                  font-size: 18px;
                  margin-top: 20px;
                  margin-left:25%;
                  width: 50%;
                }
                .form-signup button[type="submit"]:hover {
                  background-color: #447598;
          
                }
                  
              .required {
                color: red;
                margin-left: 5px;
              }
</style>






 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-signup" method="post" action="{{  route('building.store')  }}" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                  
                  <div class="form-group mt-2 mb-0">
                        <label for="Adresse"> Adresse : <span class="required">*</span></label>
                        <input type="text" class="form-control" name="adresse" placeholder="Entrez l'adresse du bien " >
                       
                  </div>
                  <div class="form-group mt-2 mb-0">
                        <div class="row">
                              <div class="col">
                                <label for="prix">Prix : <span class="required">*</span></label>
                                
                                <input type="number" class="form-control" name="prix" placeholder="Entrez le prix du bien " >
                              </div>
                              <div class="col">
                                <label for="surface">Surface : <span class="required">*</span></label>
                                <input type="number" class="form-control" name="surface" placeholder="Entrez la surface du bien " >
                              </div>
                        </div>
                  </div>
                  
                  
                  <div class="form-group mt-2 mb-0">
                        <label for="image">Images : <span class="required">*</span></label>
                        <input  type="file" class="form-control"  name="images[]" multiple >
                            
                  </div>

                  <div class="form-group mt-2 mb-0">
                      
                    
                                <label for="nbpiece">Nombre d'étages :  <span class="required">*</span></label>
                                
                                <input type="number" class="form-control" name="nbetage" placeholder="0" >
                     
                             
                  </div>

                
                  
                      
                
                  <label >Type annonce : <span class="required">*</span></label>
                  <div class="form-row mb-2">
                          <div class="form-check">
                                <input class="form-check-input checkbox-no-label" type="radio" value="Vente" id="check2" name="type_annonce"> A vendre
                          </div>
                          <div class="form-check">
                                <input class="form-check-input checkbox-no-label" type="radio" value="Location" id="check3" name="type_annonce"> A louer
                          </div>
                         
                  </div>



                 

                  

                  <div class="form-group mt-2 mb-0">
                        <label > Caractéristiques et installations : </label>
                        <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="balcon" >
                              <label class="form-check-label" for="balcon">Balcon </label>
                        </div>
                        <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="garage" >
                              <label class="form-check-label" for="garage">Garage</label>
                        </div>
                        <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="ascenceur" >
                              <label class="form-check-label" for="ascenceur">Ascenceur</label> <!-- for appartments only -->
                        </div>
                       
                        
                      
                      
                  </div>


                  <button type="submit" class="btn btn-primary mt-3" name="save">Soumettre</button>
                  
                    @include('auth.partials.copy')
              </form>
          </div>
      </div>
  </div>
 

@endsection