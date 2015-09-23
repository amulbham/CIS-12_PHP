<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Savings For-Loop</title>
		<?php
            //Amul Bham
            //Date:  Sept 21st, 2015
            //Purpose:  Savings Table Added w/ 8,9,10 percent
        ?>
    </head>
    
    <body>
		<?php
		     //Declare Variables
			 $nYears=50;  //Number of years in table
			 $iRate=0.06; //Interest Rate
			 $prin=100;   //Initial Balance in $'s
			 //Create headings in the table
			 echo '<table width="300" border="1">';
			 echo '<tr><th>Years</th><th>'.($iRate*100).'% Savings</th>
			 <th>'.(($iRate+.01)*100).'% Savings</th><th>'.(($iRate+.02)*100).'% Savings</th>
			 <th>'.(($iRate+.03)*100).'% Savings</th><th>'.(($iRate+.04)*100).'% Savings</th>
			 </tr>';
			 //Fill the table by using a for-loop row by row
			 do{
			 for($year=1;$year<=$nYears;$year++){
				 $prin*=(1+$iRate);
				 $prin=number_format($prin,2,'.','');//Limiting to pennies with truncation
				 echo '<tr>';
				 	echo "<td>$year</td>";
					echo '<td>$'.$prin.'</td>';
				 echo '</tr>';
			 }
			 $iRate+=.01;
			 }while($iRate<=.1);
        	 echo '</table>';
        ?>
    </body>
</html>