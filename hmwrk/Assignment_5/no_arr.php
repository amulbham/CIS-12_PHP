
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <title>Electro Magnetic Spectrum
        <?php
        //Amul Bham
        //Date: 9/30/2015
        //Purpose: Display the Electro Magnetic Spectrum
        
        ?>
        
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
   
    <body>
        <h1><b>Electro Magnetic Spectrum -no arrays</b></h1>
        <?php
            //Declare Variables
                $rows = 16;
                $start = 3;
                
           
            //Create headings in the table
            echo '<table width="300" border="1">';
                echo '<tr><th>Row Number</th><th>Wave Length(Meters)</th>
                <th>Band(Radio to Gamma)</th></tr>';
                    
                    
            //Fill the table by using a for-loop row by row
		for($count=1;$count<17;$count++){
                    echo '<tr>';
                    //Column 1
                        echo "<td align = 'center'>
                            $count
                        </td>";
                    //Column 2 
                        echo "<td align = 'center'>
                            10^$start                                    
                        </td>";
                    //Column 3
                        if ($start>-2){
                        echo "<td>
                            Radio Waves
                        </td>";}
                        else if ($start<=-2 and $start>-5){
                        echo "<td>
                            Microwaves
                        </td>";}
                        else if ($start<=-5 and $start>-6){
                        echo "<td>
                            Infrared
                        </td>";}
                        else if ($start<=-6 and $start>-8){
                        echo "<td>
                            Visable
                        </td>";}
                        else if ($start<=-8 and $start>-10){
                        echo "<td>
                            Ultraviolet
                        </td>";}
                        else if ($start<=-10 and $start>-12){
                        echo "<td>
                            X-Ray
                        </td>";}
                        else{
                        echo "<td>
                            Gamma Ray
                        </td>";}
                echo '</tr>';
                $start--;
                
                }
        	 echo '</table>';        
        
        ?>
        
    </body>
</html>

