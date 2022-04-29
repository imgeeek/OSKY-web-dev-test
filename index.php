<?php
        $result=file_get_contents("data.json");
        $result=json_decode($result,true);
       asort($result);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sandesh Neupane</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- only for jquery -->
   <script>
$(document).ready(function(){
$('#card').css('display', 'none');
$('#card1').css('display', 'none');
$('#card2').css('display', 'none');
$('#card3').css('display', 'none');
$('#card4').css('display', 'none');
$('#card5').css('display', 'none');
$('#card6').css('display', 'none');
$('#card').fadeIn(500);
$('#card1').fadeIn(1000);$('#card2').fadeIn(1500);$('#card3').fadeIn(2000);$('#card4').fadeIn(2500);$('#card5').fadeIn(3000);$('#card6').fadeIn(3500);
});
    </script>
</head>
<body>
   
    <div class="nav" >
<div class="logo"><img class="c_img" src="https://i.imgur.com/9fx89Br.png" alt="Company Logo"></div>
<div class="linki">
    <ul class="media">
        <li id="d_box"><a href="http://www.imsandesh.tech/"><i class="fab fa-youtube"></i></a></li>
        <li id="d_box"><a href="http://www.imsandesh.tech/"><i class="fa-brands fa-twitter"></i></a></li>
        <li id="d_box"><a href="http://www.imsandesh.tech/"><i class="fa-brands fa-linkedin"></i></a></li>
        <li><p>Logout</p></li>
        <li><p>My Dashboard</p></li>
    </ul>
    <ul class="links" id="links">
        <li><a href="#">Products</a></li>
        <li><a href="#">Safety Tools</a></li>
        <li><a href="#">Training</a></li>
        <li><a href="#">Engagement</a></li>
        <li id="dropdown"><a href="#">Membership</a>
    <ul id="dd_ul">
        <li>Latest News</li>
        <li>Subscribe to Newsletters</li>
        <li>Videos</li>
        <li>Publications</li>
        <li class="cross"><i class="fa-solid fa-circle-xmark"></i></li>
    </ul>
    </li>
        <li><a href="#">News</a></li>
        <li><a href="#">About</a></li>
      
    </ul>
    
</div>
<li class="icon" id="icon">  <i class="fa fa-bars"></i></li>
</div>
    <div class="container">
        <?php 
        $i=0;
        foreach($result as $data){ $i++ ?>
        
            <div class="card" id="card<?php echo $i; ?>">
<?php
  echo '<h2 class="title">'.$data['title'].'</h2>';
 
$desc=$data['description'];

  echo '<p>'.$data['description'].'</p>';
  if(is_array($data['link'])){
    foreach($data['link'] as $links){
      $urn_check=substr($links,0,3);
      if($urn_check!="urn"){
          ?>
          <a class="a" href="<?php echo $links ?>">Read More</a>
          <?php
   
      }
    }
}else{
    ?>
    <a class="a" href="<?php echo $links ?>">Read More</a>
    <?php
}
  $get_date=$data['pubDate'];
$check=strtotime($get_date);
echo "<p class='date'>".date('l, jS \of F Y g:i A.',$check)."</p>";
?>
</div> 
       <?php }
?>
            
    </div>
 
    <script src="main.js"></script>
</body>
</html>