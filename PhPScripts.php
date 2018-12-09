<!DOCTYPE html>                                      <!--validator-->
<html xmlns = "http://www.w3.org/1999/xhtml" lang = "en">		<!--declare namespace-->
  <head>											<!--creates a head element-->
    <meta charset="UTF-8">
    <title>Squares and Cubes of Positive Integers</title>						<!--titles the page-->
    <link href="mystyles.css" rel="stylesheet" type="text/css" media="all">
    
    
		<!-- Menu -->
		<div class="navbar">
			<a href="https://nicholastoddbell.github.io/index.html">Home</a>
			
			<div class="dropdown">
				<button class="dropbtn">Javascript 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="https://nicholastoddbell.github.io/JavaScriptScripts.html">Cubes and Squares</a>
					<a href="#">Database Driven Placeholder</a>
				</div>
		   </div>
		   
		   <div class="dropdown">
				<button class="dropbtn">PHP 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="https://nicholastoddbell.github.io/PhPScripts.php">Cubes and Squares</a>
					<a href="#">Database Driven Placeholder</a>
				</div>
		   </div> 
		   
		   <div class="dropdown">
				<button class="dropbtn">Unity 2D 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="https://nicholastoddbell.github.io/Unity2D-CSharp-Flashcards/index.html">Flashcards</a>
					<a href="https://nicholastoddbell.github.io/Unity2D-CSharp-Roulette/index.html">Roulette</a>
					<a href="#">Game Time!</a>
				</div>
		   </div> 

		   <div class="dropdown">
				<button class="dropbtn">.NET 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="#">Tic-Tac-Toe</a>
					<a href="#">.NET Project Placeholder</a>
				</div>
		   </div> 
		   
		   <div class="dropdown">
				<button class="dropbtn">Python 
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="#">Python Project Placeholder</a>
					<a href="#">Python Project Placeholder</a>
				</div>
		   </div> 
		   
			<a href="#news">Contact Me</a>
		</div>


	<!--create form-->
	<p class = "menu1">Form</p>       
	    
			
	    
	<form action = "PhPScripts.php" method = "POST" >
		
		<label for = "pick" >Type the number to pick the corresponding loop:  1. While, 2. For, 3. Do.</label>
		
		<input name = "pick" type = "text" size = "5" id = "pick" /><br />
		
		<label for = "user" >How many times through the loop?</label>
		
		<input name ="user" type = "text" size = "5" id = "user" /><br />
		
		<input type = "submit" name = "submitted" value = "Calculate" />
	</form>
	
	



<?php

$Number = array();
	
	// assign values to the array  
            for ( $i = 1; $i <= $user; $i++ ) 
			{
               $Number[ $i ] = $i;
			}
//declare function to write the arrays

writeArray( "Calculation Results:", $Number );
            
         
         // display headering then three-column table with array data and calculations"  
         function writeArray( $heading, $Number )
         {
            print( "<h2>" . $heading . "</h2>" );
            print( "<table id = 't3' >" );
   
            print( "<tr><td>Value</td>" . "<td>Square</td>" . "<td>Cube</td></tr>" );


//check to see if form has been submitted and set variables from user input
if (@$_POST['submitted'])
{
	$pick = @$_POST['pick']; //loop pick
	$user = @$_POST['user']; //times through loop selected by user
	
	
	
	//switch to determine loop fuction to use
	switch ($pick)
	{
	  case "1": 
		
		$i = 1;
	while ($i <= $user)
	{
		$square = pow($i,2);
		$cube = pow($i,3);
		array_push($Number, $square, $cube);
		print( "<tr><td>" . $i . "</td><td>" .
                  $square . "</td><td>" .
                  $cube . "</td></tr>" );
		
		$i++;
	}//end whileloop
		  
	  break;
	  
	  case "2": 
	  
		for ($i = 1; $i<=$user; $i++)
	{
		$square = pow($i,2);
		$cube = pow($i,3);
		array_push($Number, $square, $cube);
		print( "<tr><td>" . $i . "</td><td>" .
                  $square . "</td><td>" .
                  $cube . "</td></tr>" );
	
	}//end for loop
		  
	  break;
	  
	  case "3": 
		
		$i = 1;
	do
	{
		
		$square = pow($i,2);
		$cube = pow($i,3);
		array_push($Number, $square, $cube);
		print( "<tr><td>" . $i . "</td><td>" .
                  $square . "</td><td>" .
                  $cube . "</td></tr>" );
		$i++;
		
	}//end dowhileloop
	while ($i <= $user);
		  
	  break;
	  		
	}//end switch
	
			
}//end if statement to check for submitted and set variables



print( "</tbody></table>" );
	
}//end writeArray function	




?>

	
	
	

</body>
</html>