<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labourers</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arima+Madurai">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<script>
$(document).ready(function(){
$('.checkboxstatus').click(function(){
    this.setAttribute('checked',this.checked);
if (this.checked && $(this).data("def") == 0){
    //checkbox has changed
    alert('checkbox has changed from original value');
    }
 });
 });
</script>

<style>
body{
backgroud-color:#000;

}

a:hover
{
background-color:yellow;
} 
</style>	
</head>

<body style="background-image:url(&quot;assets/img/1.jpg&quot;);">

    <nav class="navbar navbar-light navbar-expand-md d-inline" style="background-color:rgba(254,251,251,0);">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="font-family:'Arima Madurai', cursive;color:#FFFFFF; font-size:30px;"><img src="assets/img/KrushiDost logo.png" width="65px" style="font-size:10px;"><strong>&nbsp; Krushiदोस्त</strong><br></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    
					<li ><a  aria-expanded="false" href="index.html" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;">Home&nbsp&nbsp&nbsp;</a>
                        
                    </li>
					<li ><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;">My Profile&nbsp&nbsp&nbsp;</a>
                        
                    </li>
					

      
                    <li ><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px"><a href="logout.php">Logout&nbsp&nbsp&nbsp;</a></a>
                     
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
                </ul>
            </div>
        </div>
    </nav>
	
<table border="2" width="200"   cellspacing="10" cellpadding="10" align="center">
<tr>
	<th><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;"> Name</a></th> 
	<th><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;">Contact</a></th>
	<th><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;">Wage per day</a></th>
	<th><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;">Skill</a></th>


	

</tr>			


<?php




  $servername = "localhost";
$dbname = "krishidost";
$username="root";
$password="";
 $location=$_POST['location'];  
   
$conn =  mysqli_connect($servername, $username, $password,$dbname);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT * FROM labourer where L_location='$location' ";
   	
	$result=mysqli_query($conn,$sql)or die(mysqli_error($con));
	
																					

		$count=-1;
		while($info=mysqli_fetch_assoc($result))
		{
			
			
			if(mysqli_num_rows($result)<1)
	{
		echo "<tr><td colspan='4'>No Records Found</td></tr>";
	}		
	else
	{																									
		$count=-1;
	
	while($info=mysqli_fetch_assoc($result))
		{
			$count++;
		    
		$parkid=$info['L_name'];         	
		$parkname=$info['L_contact'];
		$lastname=$info['wage_per_day'];
		$skill=$info['L_skill'];
		
		
		?>
		
			<tr>
			<td><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;"> 
<?php echo $parkid; ?></a></td>
			<td><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;"> <?php echo $parkname; ?></td></a></td>
			<td><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;"><?php echo $lastname; ?> </td></a></td>
						<td><a aria-expanded="false" style="font-family:Alice, serif;color:#FFFFFF;font-size:22px;"><?php echo $skill; ?> </td></a></td>

			</tr>
	


		<?php 
			
		}
		
			
	}

}


?>


</table>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<script>
function myFunction() {
    alert("Soon the selected company willcontact you");
}
</script>
</body>

</html>








<html>

<head>


<body>
	</html>