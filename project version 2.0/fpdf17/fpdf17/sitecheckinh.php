
<?php

		 $db = "database2";
 $link = mysql_connect("localhost", "root", "");
 mysql_select_db($db, $link);
 // mysql_query ("INSERT INTO slambook(fullname,firstname,middlename,lastname,nickname,fathername,mothername,bsname,bestfriendname,firstchildhoodfriendname,howdidyouknowme,doornumber,landmark,townname,distict,state,country,postalcode,googleearthcoordinates,emailid,website,skype,linkedin,twitter,googleplus,facebook,eskimi,otherid,mobilenumber,landlinenumber,voipnumber,dateofbirth,zodiacsign,gender,favcolor,favdress,favmusic,favgame,favdish,favbook,favactor,favsportsperson,moreinterestabout,thingsyoulikemostly,funniestmoment,dislikedish,dislikethingst,crazyaboutthings,anyotherdislikes,whatyoulikeonme,whatyoudislikeonme,mostremembermomentwithme,suggestionstome,undesirablemonentbyme,firstmeetwithme,lifeambition,inspiredby,yourrolemodel,aboutyou) VALUES ('$fullname','$firstname','$middlename','$lastname','$nickname','$fathername','$mothername','$bsname','$bestfriendname','$firstchildhoodfriendname','$howdidyouknowme','$doornumber','$landmark','$townname','$distict','$state','$country','$postalcode','$googleearthcoordinates','$emailid','$website','$skype','$linkedin','$twitter','$googleplus','$facebook','$eskimi','$otherid','$mobilenumber','$landlinenumber','$voipnumber','$dateofbirth','$zodiacsign','$gender','$favcolor','$favdress','$favmusic','$favgame','$favdish','$favbook','$favactor','$favsportsperson','$moreinterestabout','$thingsyoulikemostly','$funniestmoment','$dislikedish','$dislikethingst','$crazyaboutthings','$anyotherdislikes','$whatyoulikeonme','$whatyoudislikeonme','$mostremembermomentwithme','$suggestionstome','$undesirablemonentbyme','$firstmeetwithme','$lifeambition','$inspiredby','$yourrolemodel','$aboutyou')");
  
 /*$result= mysql_query("select * from slambook");
while ($row = mysql_fetch_row($result)){
    foreach ($row as $field) {
       print "$field <br/> ";
    }
    print "";
 }*/
$result = mysql_query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'database2' AND TABLE_NAME = 'slambook'");
while ($row = mysql_fetch_row($result)){
    foreach ($row as $field) {
       print "<br/>$field";
    }
    print "";
}



$result= mysql_query("select * from slambook");
while ($row = mysql_fetch_row($result)){
    foreach ($row as $field) {
       print "$field <br/> ";
    }
    print "";		 
		}

	  mysql_close();
  print mysql_error();
	

	?>


<center>
  <p><strong><em>&copy;sadakpramodh-2014</em></strong></p>
  <p><strong>slambook version 2.0.0</strong></p>
  <p><em>All rights reserved on sadakpramodh</em></p>
</center></BODY></HTML>
