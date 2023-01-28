<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<br><br><br>
	<div class="navbar navbar-default navbar-fixed-bottom" style="background-color: #f0f8ff;">
    <div class="container">
      <div class="col-md-7">
      	<div class="navbar-text pull-left">
      			&copy
      			<?php echo date('Y');?> - <U></U>.
      	     	 <i>Que tengas un lindo día Einstein</i>
      	</div>
     </div>
     <div class="col-md-5" style="text-align: right;">
     	<div class="navbar-text pull-right">
     	<span id="liveclock" ></span>
     	</div>
     </div>
      	
   </div>
   

	</div>
		<script language="JavaScript" type="text/javascript">
    function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='4' face='DigifaceWide'><b>"+hours+" : "+minutes+" : "
         +seconds+" <font size='2'>"+dn+"</font></b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }


        window.onload=show5
         //-->
     </script>
	</script>

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>