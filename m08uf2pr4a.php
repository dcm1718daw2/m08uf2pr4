<HTML>
    <HEAD>
    	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    	<TITLE>Pràctica 4 M08UF2 DAW2 2017-2018</TITLE>
    </HEAD>
    <BODY>
        <FORM method='post' action='m08uf2pr4b.php'>
        	<?php
        	   $quantesTemperatures = $_REQUEST["nombreDeTemperatures"];
        	   print "El nombre de temperatures &eacute;s ".$quantesTemperatures."<BR>\n";
        	   for ($i=0;$i<$quantesTemperatures;$i++){
                    print 'Temp['.($i+1).'] : <input name="temp[]" ><BR>';
                    print "\n";
        	   }
            ?>
        	<input type="hidden" name="nombreDeTemperatures" value="<?php print $quantesTemperatures; ?>">
        	<INPUT type ='submit' value='Tramet'>
        </FORM>
    </BODY>
</HTML>	