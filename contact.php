<?php
      require "template/header.php";
      if(isset($_POST["mailForm"])){

      }
 ?>
        <!-- =============================================start of main================================== -->
        <div id="clearThis"></div>
        <h2 class="title darkP text-white text-center"><i class="fas fa-envelope"></i>Me laisser un message</h2>
          <hr>
        <div class="container">
            <form action="controller.php" method="POST">
              <div class="machin">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name">
              </div>
              <div class="machin">
                <label for="mail">Mail :</label>
                <input type="email" id="mail" name="mail">
              </div>
              <div class="machin">
                <label for="adress">Adresse :</label>
                <input type="text" id="name" name="adress">
              </div>
              <div class="machin">
                <label for="phone">Tél :</label>
                <input type="email" id="mail" name="phone">
              </div>
              <div class="machin">
                <label for="msg">Message :</label>
                <textarea id="msg" name="message"></textarea>
              </div>
              <div class="machin button">
                <button type="submit" value="send" name="mailForm">Envoyer</button>
              </div>
            </form>
            </div> 
            <?php
            if(isset($msg)){
              echo $msg;
            }
            ?>
              </main>
              <!-- =================================================end of main====================================== -->
              <?php
                    require "template/footer.php";
               ?>
