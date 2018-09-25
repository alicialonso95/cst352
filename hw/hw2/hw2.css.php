<?php 
header ("Content-type: text/css");
?>
body{
            text-align: center;
            background: black;
            color: black;
            background: url(img/<?php echo $background; ?>) no-repeat;
            background-image: url("fixedbackground.jpg");
            background-position: center;
            background-repeat: no-repeat;
          background-size: cover;
          position: relative;
        }
        
        .character{
        position: absolute;
        }
        
	.hp, h1{
	text-shadow: 3px 2px yellow;
	font-size: 50px;
	font-weight: bold;
	text-align: center;
	color: black;
	}
    