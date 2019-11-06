<?php
function kiir($Felhasználo)
{
   foreach ($Felhasználo as $key => $value)
	{  
		if(is_array($value))
		{
			echo "Érdeklödés";
			foreach($value as $anyad)
			{
				echo " ".$anyad;
			}
		}
		else
		{
			echo $key." is ".$value."<br>";  	
		}
	}
}
function IsChecked()
{
if(isset($_POST["checkbox"]))
	{
		$interest=$_POST["checkbox"];
	}
	else
	{
		$interest= "Nincs";
	}
	return $interest;
}
function IsPasswordCorrect($p1,$p2)
{
	if($p1!=$p2)
	{
		$bool=true;d
	}
	else
	{
		$bool=false;
	}
	return $bool;
}
function IsEmpty($u,$e,$p1,$p2)
{
	if($u== null || $e== null || $p1== null || $p2== null)
	{
		$bool=true;
	}
	else
	{
		$bool=false;
	}
	return $bool;
}
function RemoveFiller(&$u,&$e,&$p1,&$p2)
{
	$u=strip_tags($u);
	$u=trim($u);
	$u= preg_replace("/[^a-zA-Z0-9]+/", "", $u);
	$e=strip_tags($e);
	$e=trim($e);
	$e = preg_replace("/[^a-zA-Z0-9]+/", "", $e);
	$p1=strip_tags($p1);
	$p1=trim($p1);
	$p1= preg_replace("/[^a-zA-Z0-9]+/", "", $p1);
	$p2=strip_tags($p2);
	$p2=trim($p2);
	$p2= preg_replace("/[^a-zA-Z0-9]+/", "", $p2);
}
	$username=$_POST["Username"];
	$email=$_POST["Email"];
	$password=$_POST["Password"];
	$passwordagain=$_POST["Passwordagain"];
	$sex=$_POST["Nem"];
	$Occupation=$_POST["select"];
	RemoveFiller($username,$email,$password,$passwordagain);
	$interest=IsChecked();
	if(IsPasswordCorrect($password,$passwordagain))
	{
		echo "Jelszo nem egyezik";
	}
	else if(IsEmpty($username,$email,$password,$passwordagain))
	{
		echo "Ne hadjon semmit üresen";
	}
	else
	{
		$Felhasználo = array("Name"=>$username, "Email"=>$email,   
            "password"=>$password, "sex"=>$sex,   
            "Munka"=>$Occupation, "Érdeklödés"=>$interest);
		kiir($Felhasználo);
	}
	

	
	//echo $username." ".$email." ".$password." ".$passwordagain." ".$sex." ".$Occupation." ".$interest;


