<section id="contact" class="container text-center">
   <h3 class="heading"> Où nous trouver ? </h3>
   <div class="heading-underline"></div>
   <div class="row"> 
      <div class="col-xs-12 col-sm-6 col-md-6">
         <form action="" method="POST" id="contactForm" class="contactForm">
            <!-- <label for="inputname" class="pull-left">Nom</label> -->
            <input type="text" class="form-control" name="name" id="name" placeholder="Nom" required>

            <input type="email" class="form-control" name="email" placeholder="Adresse Email" required>

            <!-- <label for="phone" class="pull-left">Telephone Mobile:</label> -->
            <input type="text"  class="form-control" name="phone"  placeholder="Telephone" required>

            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Message" required></textarea>

            <br><button type="submit" class="btn btn-success btn-contact" data-dismiss="modal" name="Send">Envoyer</button>
         </form>
      </div>
   
      <div class="col-sm-6 col-md-6 ">
            <img class="imgContact  img-responsive" src="public/img/contactUs.png" alt="contactGif">
      </div>
   </div>
</section>