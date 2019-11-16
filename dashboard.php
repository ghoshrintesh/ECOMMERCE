
<?php include('menu.php');?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="style1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

      <form action="dashboard.php" class="dashboard" method="post">
        <h1>Order Your Food</h1>

        <center> <?php include('welcome.php');?></center>
        <?php include('errors.php');?>
       

          <br/><br/><center><p><strong>Select your preferred location.</strong></p><select name="loc"></center>
            <opion selected>location</opion>
          <?php 
            $db=mysqli_connect('localhost','root','','newfood');
            $query4="SELECT location FROM restaurant group by location"; 
            $result4=mysqli_query($db,$query4);
            while($row4= mysqli_fetch_array($result4)){
              $loc=$row4['location'];
              echo "<option>$loc</option>";

            }
            ?>
          </select>
          
        
      
        <br/><br/><br/><br/><center><p><strong>Select your restaurant to order.</strong></p><select name="res"></center>

            <opion selected>restaurant</opion>
          <?php 
            $db=mysqli_connect('localhost','root','','newfood');
            $query5="SELECT rname FROM restaurant"; 
            $result5=mysqli_query($db,$query5);
            while($row5= mysqli_fetch_array($result5)){
              $r=$row5['rname'];
              echo "<option>$r</option>";

            }
            ?>
          </select>


          <!--
            <option>Aminia</option>
            <option>Arsalan</option>
            <option>BarBQ</option>
            <option>Tandoor House</option>
            <option>Zaika</option>
            <option>Penguin</option>
            <option>Kareems</option>
            
         
          
      </select>-->
          <span data-placeholder="Select Restaurant"></span>
        </div>
 
       <br/><br/> <br/><br/><input type="submit" name ="go" class="logbtn" value="Go">

       

      </form>

    
  </body>
</html>
