
<!-- Basic page structure with Scrollspy and Affix from https://www.w3schools.com/bootstrap/bootstrap_filters.asp and heavily adapted / built upon for the project. --> 

<?php
session_start();
/*echo $_SESSION["uname"];*/
?>


<!DOCTYPE html>
<html>
    
<head>
  
<title>Carbon Tracker Template | CSC8005 Team 1 </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel = "stylesheet" type = "text/css" href = "css/main.css" />
      
</head>
    
    
<body data-spy="scroll" data-target=".navbar"> <!-- do not change! -->

<!-- Header here -->     
    
<!-- Navigation here. Adapted from www.w3schools.com/bootstrap/bootstrap_filters.asp -->         

    
    
    
<nav class="navbar" data-spy="affix" data-offset-top="0">
    
  <div class="container-fluid">
      
      
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
    </button> 
        
    <a class="navbar-brand" href="#"> 
        
                <img id="teamlogo" src="/Users/George/Downloads/ecology.png" display="inline-block" />
        
                <img id="sagelogo" src="https://cdn.freebiesupply.com/logos/large/2x/sage-2-logo-png-transparent.png" />   
        
                    CarbonTracker </a>
    </div>
      
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="#Items">Items</a></li>
          <li><a href="#ADD others">ADD others</a></li>
          <li><a href="#Tracking">Tracking</a></li>
          <li><a href="#Awards">Awards</a></li>
          <li><a href="#ID page">ID page</a></li>

        </ul>

          <!--          Page         of         Login          --> 
          <ul class="nav navbar-nav navbar-right">
      <li ><a href="/sage_final/Sage_Logging_Page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
          
      </div>
    </div>
</nav>    

    
<!-- Body of page starts here -->    
<!--     item     -->
<div id="Items" class="container-fluid">
  <h1>Items</h1>
 <iframe   width=100% height=700 src="items/item.php" frameborder=0></iframe> 
</div>
</div>

<div id="ADD others" class="container-fluid">
  <h1>ADD others</h1>
 <iframe   width=100% height=700 src="items/add.php" frameborder=0></iframe> 
</div>
</div>


<div id="Tracking" class="container-fluid">
  <h1>Tracking</h1>
  <iframe   width=100% height=700 src="Tracking/Tracking.php" frameborder=0></iframe> 
</div>

<!--     Awards     -->    
<div id="Awards" class="container-fluid">
  <h1>Awards</h1>
<iframe   width=100% height=700 src="Awards/awards.php" frameborder=0></iframe> 
</div>

<!--   User ID   -->
<div id="ID page" class="container-fluid">
  <h1>User Page</h1>
<iframe   width=100% height=700 src="carbonTracker/ID-page.php" frameborder=0></iframe>
</div>

</body>
</html>
