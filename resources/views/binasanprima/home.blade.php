@extends('bspthemes.index')
@section('title')
<title>PT Binasanprima</title>
@endsection
@section('content')
<div class="slider">
        <ul class="slides">
          <li>
            <img src="img/slider/1_1.png"> <!-- random image -->
            <div class="caption left-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/2_2.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/3_3.png"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/slider/sbf.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>


       <!-- About Us-->

      <!--section#about.about emet-->
      <section id="about" class="about scrollspy">
         <div class="container">
           <div class="row">
              <h3 class="center ligth grey-text text-darken-5">About us</h3>
              <div class="col m6 light">
                 <h5>
                   We Are Professionals Team
                 </h5>
                 <p>
                  <b>PT BINA SAN PRIMA</b>, is national health care, consumer product and raw materials distributor, founded in 1994 by Mr.Drs.Jahja Santoso, Apt., with service oriented management to both Customers and Principals, to ensure high quality of service being rendered simultaneously...
                  <a href="">Readmore</a>
                  <!--   
                  Its head Office is located in Bandung, Indonesia, and operates a network of 44 branches, 10 depos and 16 subdist by 2015 throughout Indonesia. This broad distribution network has helped PT Bina San Prima's success in gaining trust to distribute products from several Reputable.
                  
                  PT Bina San Prima is well managed by a Professional Executive team lead by the Founder, Mr.Drs.Jahja Santoso,Apt. The Executive Team include two Executive at the Director level who are in charge of Operational and Sales, Finance & Accounting. The Top Management is supported by several able middle Managers with background in major companies and well educated. -->
                 </p>
              </div>
              <div class="col m6 light">
                <h5 class="center ligth grey-text text-darken-5">Our Products</h5>
              <p>
               Health Care
              </p>
              <div class="progress">
                <div class="determinate" style="width: 70%"></div>
              </div>
              <p>
                Vaccine
              </p>
              <div class="progress">
                <div class="determinate" style="width: 90%"></div>
              </div>
              

              
              <p>
               Food & Beverage
              </p>
              <div class="progress">
                <div class="determinate" style="width: 85%"></div>
              </div>

            

              <p>
                Raw Material
              </p>
              <div class="progress">
                <div class="determinate" style="width: 90%"></div>
              </div>

            </div>
           </div>
         </div>
      </section>

     
        

      <!--Partner-->
      <section id="services" class="services grey lighten-4 scrollspy">
         <div class="container"> 
            <div class="row">
               <h3 class="light center grey-text text-darken-3">
                Key to Excellence In Our Services
               </h3>
               <div class="col m4 s12"> <!-- 3 column kalo small 12 -->
                 <div class="card-panel center">
                    <i class="material-icons medium">local_shipping</i>
                    <h5>Delivery On Time</h5>
                    



                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nihil aliquid? Quod commodi ullam tenetur atque, rerum nam earum modi itaque saepe nisi libero autem, dolore maiores eius ea dicta?</p>
                 </div> 
               </div>

               <div class="col m4 s12"> <!-- 3 column kalo small 12 -->
                <div class="card-panel center">
                   <i class="material-icons medium">person_pin</i>
                   <h5>Complain Handling</h5>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nihil aliquid? Quod commodi ullam tenetur atque, rerum nam earum modi itaque saepe nisi libero autem, dolore maiores eius ea dicta?</p>
                </div> 
              </div>

              <div class="col m4 s12"> <!-- 3 column kalo small 12 -->
                <div class="card-panel center">
                   <i class="material-icons medium">sentiment_very_satisfied</i>
                   <h5>Consumer Satisfy</h5>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nihil aliquid? Quod commodi ullam tenetur atque, rerum nam earum modi itaque saepe nisi libero autem, dolore maiores eius ea dicta?</p>
                </div> 
              </div>
            </div>
         </div>
      </section> 


      <!-- Portofolio-->
      
      <section id="portfolio" class="portfolio scrollspy">
         <div class="container">
            <h3 class="light center grey-text text-darken-3">Products</h3>
            <div class="row"> <!-- 4 column-->
               <div class="col m3 s12">
                  <img src="img/portfolio/1.png" class="responsive-img materialboxed">
               </div>
               <div class="col m3 s12">
                  <img src="img/portfolio/2.png" class="responsive-img materialboxed">
               </div>
               <div class="col m3 s12">
                  <img src="img/portfolio/3.png" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                  <img src="img/portfolio/4.png" class="responsive-img materialboxed">
               </div>
            </div>

            <div class="row"> <!-- 4 column-->
              <div class="col m3 s12">
                 <img src="img/portfolio/5.png" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                 <img src="img/portfolio/6.png" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                 <img src="img/portfolio/1.png" class="responsive-img materialboxed">
             </div>
             <div class="col m3 s12">
                 <img src="img/portfolio/2.png" class="responsive-img materialboxed">
              </div>
           </div>
         </div>
      </section>


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