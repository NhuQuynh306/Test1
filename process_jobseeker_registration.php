<?php session_start();
error_reporting(E_ERROR | E_PARSE);
require 'connect.php';

//Post array is empty or not
if(empty($_POST))
{
exit;
}	
 
$name= $_POST['email'];
$error=0; 
 
$emp="select ee_email from employees where ee_email = '$name' ";
$empresult = mysqli_query($connect,$emp);
while(($row  = mysqli_fetch_array($empresult,MYSQLI_ASSOC))) 
 {
  if($row['ee_email']==$name)
  {
	  $error=1;
  }
 }
//echo $error;	  
if($error==0)
{	  
 // Upload and Rename File 
 if (isset($_POST['register']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	
 
	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $name . $file_ext;
		//$newfilename = md5($file_basename) . $file_ext;
		if (file_exists("uploads/" . $newfilename))
		{
			// file already exists error
		    //echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $newfilename);
			//echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
	//	echo "Please select a file to upload.";
	} 
	elseif ($filesize > 200000)
	{	
		// file size error
	//	echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
	//	echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}
         $email=$_POST['email'];
		//echo "$email"; echo "<br>";
		
		$password=$_POST['password'];
		//echo "$password"; echo "<br>";
		
		$fname=$_POST['fname'];
		//echo "$fname"; echo "<br>";
		
		$lname=$_POST['lname'];
		//echo "$lname"; echo "<br>";
		
		$day=$_POST['day'];
		//echo "$day";
		
		$month=$_POST['month'];
		//echo "$month";
		
		$year=$_POST['year'];
		//echo "$year";
		
		$gender=$_POST['gender'];
		//echo "$gender"; echo "<br>";
		
		$country=$_POST['country'];
		//echo "$country"; echo "<br>";
		
		$city=$_POST['city'];
		//echo "$city"; echo "<br>";
		
		$education=$_POST['education'];
		//echo "$education";echo "<br>";
		
		$master=$_POST['master'];
		//echo "$master";echo "<br>";
		
		$mcode=$_POST['mcode'];
		//echo "$mcode";echo "<br>";
		
		$mnumber=$_POST['mnumber'];
		//echo "$mnumber";echo "<br>";
		
		$experience=$_POST['experience'];
		//echo "$experience";echo "<br>";
		
		$skills=$_POST['skills'];
		//echo "$skills";echo "<br>";
		
		$industry=$_POST['industry'];
		//echo "$industry";echo "<br>";
		
		$certification=$_POST['certification'];
		//echo "$certification";echo "<br>";
		
		
//move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
$path = "uploads/";

//$path = "uploads/".$_FILES["file"]["tmp_name"]

//echo "$path";
				

$q="INSERT INTO employees (ee_email,ee_password,ee_fname,ee_lname,ee_day,ee_month,ee_year,ee_gender,ee_country,ee_city,
ee_education,ee_master,ee_mcode,ee_mnumber,ee_experience,ee_skills,ee_industry,ee_certification,ee_path) VALUES
('$email','$password','$fname','$lname','$day','$month','$year','$gender','$country','$city','$education','$master','$mcode','$mnumber','$experience','$skills','$industry','$certification','$path')";

$result=mysqli_query($connect,$q)or die("wrong query");
mysqli_close($connect);

$display="You have succesfully registered";
}

if($error==1)
{
$display="You are already a registered user";
}
 
 
//back to this page
//header("location:jobseeker_registration.html");	*/

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Job</title>
<link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
<link rel="stylesheet" type="text/css" href="js/style.js" />










  <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
 
  <script type="text/javascript">
  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();

    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>

  <style type="text/css">
  * {
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
	line-height: normal;
  }
 
  h2 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
    border-bottom: 1px dotted #dedede;
  }
  h3 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
  }
  .example {
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  ul {
    list-style-image:url(list-style.gif);
  }
  pre {
    font-family: "Lucida Console", "Courier New", Verdana;
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  code {
    font-family: "Lucida Console", "Courier New", Verdana;
    margin: 0;
    padding: 0;
  }

  #gallery {
	background: #fff;
	padding-top: 0px;
	padding-right: 125px;
	padding-bottom: 0px;
	padding-left: 30px;
	width:1000px; margin:0 auto;
	
  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 640px;
    padding: 10px;
    overflow: hidden;
  }
    #descriptions .ad-image-description {
      position: absolute;
    }
      #descriptions .ad-image-description .ad-description-title {
        display: block;
      }
  </style>
  
<style>
input[type=text]{ color:#ccc;}
input[type=text]:focus{ color:#71716f;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
</head>

<body>
<div class="home_header_main">
  <div id="home_header">
    <div class="home_logo"><a href="index.php"><img src="images/large_logo.png" width="180" /></a></div>
    <div class="home_header_right">
      <div class="home_right_topmenubar">
     <?php
	  include ('includes/top.inc.php');
	  ?>
     
      
      </div>
      <div class="home_menubar">
      <div class="home_socialmedia_icons">
      <ul>
                              <li><a href="#"><img src="images/facebook.png" width="23" /></a></li>
                              <li><a href="#"><img src="images/twitter.png" width="23" /></a></li>
                              <li><a href="#"><img src="images/linkedin.png" width="23" /></a></li>
                            </ul>
      </div>
      <div class="home_menubar_manu">
      <?php
	 include ('includes/menu.inc.php');
	 ?>
     
      </div>
      
      
      
      </div>
    </div>
  </div>
</div>
<div class="clear_both">&nbsp;</div>

<div class="login_banner_main">
<div id="login_banner_duplicat">
<div class="login_incorrect">

<!--Email has been send check your mail... -->
<?php
echo $display;
?>


</div>
<div class="login_div">
<style>
input[type=text]{ color:#ccc;}
input[type=text]:focus{ color:#71716f;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="35" class="login_box">Login</td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:25px;">Email</td>
  </tr>
  <tr>
    <td height="auto" style="padding:0px;">
    <input type="text" value="Nhập Email của bạn id" class="login_select"
     name="email" 
    onblur="if(value=='') value = 'Nhập Email của bạn id'" 
    onfocus="if(value=='Nhập Email của bạn id') value = ''"
 />    </td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:25px;" >Password</td>
  </tr>
  <tr>
    <td height="auto"><input type="text" value="Password"
  class="login_select"
   name="Password" 
    onblur="if(value=='') value = 'Password'" 
    onfocus="if(value=='Password') value = ''"/></td>
  </tr>
  <tr>
    <td height="71"    ><input type="submit" value="Login" class="login_submit" /></td>
  </tr>
  <tr>
    <td height="50"><a href="#">Forgot Password</a> / <a href="#">Register Now</a></td>
  </tr>
</table>
</div>
</div>
</div>



















<div id="container">
    


    <div id="gallery" class="ad-gallery">
      <iframe  frameborder="0" width="1075" height="125" src="navigator/example/navigator.html"   scrolling="no" frameborder="0"   allowtransparency="no" >
                </iframe>
    </div>
    
</div>





















<div class="clear_both">&nbsp;</div>


<div id="home_footer_main">
  <div id="home_footer">
    <div id="home_footer_slice_one"> <a href="#"><img src="images/large_logo.png" width="100"  border="none"/></a> </div>
    <div id="home_footer_slice_two"> <span class="home_foote_span">JFD Links</span><br />
       <?php
	 include ('includes/footer.inc.php');
	 ?>
     
    <div id="home_footer_slice_five"> <span class="home_foote_span">Liên hệ hỗ trợ</span><br />
      <br />
      <span class="speech_number">090 1168 525</br></br> jobfordue@gmail.com</span> </div>
  </div>
</div>
</body>
</html>
