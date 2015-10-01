
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
        <h1>Electro Magnetic Spectrum -Functions and Arrays</h1>
        <?php
            //Declare Variables
                $waveN = array();
                $wave = array(); //array to store the wave length   
                $rowN = array();
                $start = 3; 
                $rows = 16;
           
            //Call the calculate array funciton
            calArr($wave, $waveN, $rowN, $start, $rows);    
            //Create headings in the table
            echo '<table width="300" border="1">';
                echo '<tr><th>Row Number</th><th>Wave Length(Meters)</th>
                <th>Band(Radio to Gamma)</th></tr>';
                    
                    
            //Fill the table by using a for-loop row by row
		for($count=0;$count<16;$count++){
                    echo '<tr>';
                    //Column 1
                        echo "<td align = 'center'>
                            $rowN[$count]
                        </td>";
                    //Column 2 
                        echo "<td align = 'center'>
                            $wave[$count]                                    
                        </td>";
                    //Column 3
                        echo "<td align = 'center'>
                            $waveN[$count]
                        </td>";
                        
                echo '</tr>';
                }
        	 echo '</table>';        
        
        ?>
        
        
        <?php
         function calArr(&$wave,&$waveN,&$rowN,$start,$rows){    
               
            //Intialize arrays with column data
            for($i =0; $i<$rows;$i++){
                
                $rowN[$i] = $i+1;
                $wave[$i] = "10^".$start;
                //Column 3
                        if ($start>-2){
                            $waveN[$i]= 'Radio Waves';
                        }
                        else if ($start<=-2 and $start>-5){
                            $waveN[$i]= 'Microwaves';
                        }
                        else if ($start<=-5 and $start>-6){
                            $waveN[$i]= 'Infrared';
                        }
                        else if ($start<=-6 and $start>-8){
                            $waveN[$i]= 'Visible';
                        }
                        else if ($start<=-8 and $start>-10){
                            $waveN[$i]= 'Ultraviolet';
                        }
                        else if ($start<=-10 and $start>-12){
                            $waveN[$i]= 'X-ray';
                        }
                        else{
                            $waveN[$i]= 'Gamma Rays';
                        }
                $start--;
            }
            }
        
        
        ?>
    </body>
</html>

