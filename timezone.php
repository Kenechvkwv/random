<?php
   //setting the timezone
   $parisTimezone = 'Europe/Paris';   
   date_default_timezone_set($parisTimezone);
   //retrieving set timezone
   $retrieveParis = date_default_timezone_get();
   echo"Default timezone: ".$retrieveParis."<br>";
   //echoing the actual time within this timezone
   echo date('d-m-y H:i:s');
?>