

    <!-- Navbar Start -->
<?php 
require_once('head.php');
?>
    <!-- Navbar End -->


    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
               
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
                        <?php 
                        require_once('db.php');
                           $q="SELECT * FROM pages WHERE page='Customer care portal' order by id DESC LIMIT 1";
                           $q=mysqli_query($conn,$q);
                           while($row = mysqli_fetch_assoc($q)){
                        echo      $content= $row['content']; 
                               
                           }
                           
                           ?>
                            <p>
                            
                            
                            
                            </p>
                       
                         
                          
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Social Follow Start -->

                    <!-- Social Follow End -->

                    <!-- Newsletter Start -->
       
                    <!-- Newsletter End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

     <?php 
   require_once('footer.php');
   ?>