<h1>Calendar of October 2017</h1>

<style>
    table{
        width:300px;
        font-size:24px;
        text-align: center;
    }
    th {background-color:green;color:white; padding-right: 2%;padding-left: 1%;text-align: center;}
    td{background-color:yellow;}
</style>


<?php 
$semanaSiguiente = time() + (7 * 24 * 60 * 60); // 7 días; 24 horas; 60 minutos; 60 segundos


$mes = date("m",mktime(0,0,0,10,1,2017)); //echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
$anyo = date ("Y",mktime(0,0,0,10,1,2017));
$semana = array ("Mon","Tue", "Wed", "Thu","Fri","Sat","Sun");
echo "<table>";
    echo "<th>";
        //echo "<tr>";
            echo "<th colspan='7'>".date("M, Y",mktime(0,0,0,10,1,2017))."</th>"; //Mes de Octubre
        //echo "</tr>";
        echo "<tr>";
            echo "<th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th>"; 
            //Días de la semana
        echo "</tr>";
    echo "</th>";


    //Establecer el primer día del mes
    echo "<tr>";
            for ($i=0;$i<=6;$i++){ //i=0 --> Lunes ~ hasta 6 que es el Domingo
                if (date("D",mktime(0,0,0,10,1,2017))==$semana[$i]){ 
                // "D" --> A textual representation of a day, three letters. 
                //Si el día de la semana se corresponde con los días del array, píntame los días en formato numérico
                    echo "<td>". date("d", mktime(0,0,0,10,1,2017)) ."</td>";   
                }
                else{
                    echo  "<td>". "</td>"  ; //Deja en blanco 6 casillas que corresponden con el "Sun"
                    }
                }
    echo "</tr>";

//Proyecta los días siguientes:

for ($j=2;$j<=date("t",mktime(0,0,0,10,1,2017));$j++){ //t --> Number of days in the given month
    //Recorre la siguiente semana a partir del día 2
    if (date("D",mktime(0,0,0,10,$j,2017))=="Sun" ){ 
        echo "<td>". date("d", mktime(0,0,0,10,$j,2017)). "</td >"; //Haz que la semana empiece en el día 2
        echo "</tr>". "<tr>"; 
    }else{
        echo "<td>". date("d", mktime(0,0,0,10,$j,2017)).  "</td>" ;
    }
}
   

echo "</table>";

echo "<br>";
echo 'Hoy es: '. date('d-m-Y') ."";
echo "<br>";
echo 'Dentro de una semana es: '. date('d-m-Y', $semanaSiguiente) ."";
?>
