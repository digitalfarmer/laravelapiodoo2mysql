@extends('bspthemes.index')
@section('title')
<title>Contact</title>
@endsection
@section('content')

 <!-- Contact Us-->

 <section id="contact" class="contact scrollspy">
         <div class="container">
             <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
             <div class="row">
                 <div class="col m5 s12"> <!-- 2 column  . kalo medium 5, kalo small 12 -->
                      <div class="card-panel blue darken-4 center white-text">
                         <i class="material-icons">email</i> 
                     
                      <h5>Contact</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.onem nostrum illum a vel iste soluta recusandae explicabo vitae cupiditate!</p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Head Office</h4></li>
                        <li class="collection-item">Bina San Prima, PT</li>
                        <li class="collection-item">Sanbe Tower 2 Building</li>
                        <li class="collection-item">Jl. Taman Sari 10-16 Bandung, West Java, Indonesia</li>
                         
                    </ul>
                 </div> 
                 <div class="col m7 12">
                    <form class="card-panel">
                        <h5>Please Filled Out this Form</h5>
                        <div class="input-field">
                          <input type="text" name="name" id="name" class="validate" required>
                          <label for="name">Name</label>
                        </div>
                        <div class="input-field">  
                          <input type="email" name="email" id="email" class="validate">
                          <label for="name">Email</label>
                        </div>

                        <div class="input-field">  
                          <input type="text" name="phone" id="phone">
                          <label for="name">Phone Number</label>
                        </div>

                        <div class="input-field">  
                          <textarea name="message" id="message" class="materialize-textarea"></textarea>
                          <label for="message">Type your Message here</label>
                        </div>

                        <button type="submit" class="btn blue darken-4">Send</button>
                    </form>
                 </div>

                  
             </div>
         </div>
      </section>
@stop