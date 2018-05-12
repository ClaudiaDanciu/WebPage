<!DOCTYPE html>
<?php
        $colors = array('#EB5E55', '#F18F01', '#883955', '#F45D01', '#D72638['
            . ']'
            . '');
        $color_count= count($colors);
?>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Digital Analog Clock</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <style type = "text/css">
        
        #main-content, 
        .colors {
              margin: 0;
              padding: 0;
              background: <?php echo $colors[rand(0, $color_count-1)]; ?>;
          }
          .area {
             float: left;
             margin: 0;
             padding: 0;
             width: 100px; height:100px;
          }

          #main-content, 
          #area1 {
            background: <?php echo $colors[rand(0, $color_count-1)]; ?>  
          }
          
        </style>
    <script src="script.js" defer></script>
</head>

<body>
<!--navbar-->

 <div  id="top_header" >
    <img id="logo" src="claudiadanciu_light.png" alt = "logo" />
       <nav>
          <ul class ="nav">
               <li class ="nav-item"><a class="menu" href='#Me'>About Me</a></li>
               <li class ="nav-item"><a class="menu" href='#Books'>Books</a></li>
               <li class ="nav-item"><a class="menu" href='#Music'>Music</a></li>
           </ul>
        </nav>
    </div>
<div style="background-image: url(big.jpg); background-size: 100%; background-repeat: no-repeat; " >
    <h1 style="padding-top:3%">The time is: </h1>
    
    <main class="main">
      <h2>N</h2>
      <div class="clockbox">
        <svg id="clock" xmlns="http://www.w3.org/2000/svg" width="200" height="200"  viewBox="0 0 600 600" style="size: 100%">  
        <g id="face">
               <circle fill='none' stroke='#000' stroke-miterlimit='10' stroke-width='9' cx="300" cy="300" r="253.9"/>
                <path fill='none' stroke='#000' stroke-width='9' stroke-miterlimit='10' d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"/>
                <circle fill='#000' cx="300" cy="300" r="16.2"/>
            </g>
            <g id="hour">
                <path fill='none' stroke='#000' stroke-width='9' stroke-miterlimit='10' d="M300.5 298V142"/>
                <circle fill='none' cx="300" cy="300" r="253.9"/>
            </g>
            <g id="minute">
                <path fill='none' stroke='#000' stroke-width='11' stroke-miterlimit='10' d="M300.5 298V67"/>
                <circle fill='none' cx="300" cy="300" r="253.9"/>
            </g>
           
            <g id="second">
                <path fill= 'none' stroke= '#000' stroke-width= '3' stroke-miterlimit= '10' d="M300.5 350V55"/>
                <circle fill='none' cx="300" cy="300" r="253.9"/>
            </g>
        </svg>
        
    </div><!--clockbox-->
   <h2>W</h2> 
</main> 
</div>
<div id="main-content">
          <h1>Is It Friday Yet?</h1>
          <p>
           <?php date_default_timezone_set("Europe/London");?>
           <?php
           if(date('D') == 'Fri') {
              echo "Woo Hoo! It is Friday!!!";
           }else {
               echo "Sorry, it is not Friday yet.<br />";
              $remaining = 5- date('N');
              if ($remaining <0) {$remaining += 7;}
              echo "Only {$remaining} more days to go.";
              
           }
           ?>
              
            </p>
            <br />
           
<div id="main-cont">
          <h1>Is This a Leap Year?</h1>
          <p>
           <?php date_default_timezone_set("Europe/London");?>
           <?php
          function is_leap_year($year){
           if ($year % 4 > 0) {
               return false;
           }elseif($year % 100 >0){
               return true;
           }elseif($year%400>0 ) {
               return false;
           } else{
               return true;
           }
          }
          
          if (isset($_GET["year"])){
              $year= intval($_GET["year"]);
          }else{
              $year = date('Y');
              
          }
          
           if (is_leap_year($year)) {
               echo"Yes, {$year} is a leap year. ";
           }else{echo"No, {$year} is not a leap year.";}
           ?>
              
            </p>
            <form action="" method="get">
                Enter a year to find out if it is a leap year:<br />
                <input type ="text" name="year" value="<?php echo $year; ?>" /><br/>
                <input type="submit" value="submit">
            </form>
       
      </div>
            
    <div style="background-image: url(bran-castle.jpg); background-size: 100%">
        <div class="container">
            <img src="dia.png" alt="I" class="mypic float-left">    
        <p id="Me">My name is Claudia Danciu and I was born in Romania. 
       Most of my life a lived in Transylvania and even if I visited 
       Dracula's House many times I never met him in person :). I am a confident, 
       highly motivated individual with a keen interest in programming. Very enthusiastic,
       driven by giving a truthful customer service and experience, with a particular-skill
       when it comes to consolidating the areas that work well and tackling the challenges
       that slow down growth in a business so that the organization can maximize its full
       potential. 
       <br>
       
      </p> 
      
       </div>
    </div>
    
    <div class="colors">
        <div class="area" id="area1"></div>  
        <div class="area" id="area2" style="background: <?php echo 
        $colors[rand(0, $color_count-1)]; ?> ;"></div> 
         
        <?php
        $squares = 100;
        for($i=0; $i<$squares; $i++) {
            echo "<div class=\"area\" id=\"area2\" style=\"background:
            {$colors[rand(0, $color_count-1)]} \"></div>";
                
        }
        ?>
    </div>
    
    
</body>

</html>
