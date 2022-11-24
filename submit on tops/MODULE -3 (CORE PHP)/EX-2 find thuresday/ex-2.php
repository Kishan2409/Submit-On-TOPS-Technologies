<?php
$months=$_POST['month'];  
$years=$_POST['year'];                                      
$monthName = date("F", mktime(0, 0, 0, $months));
$fromdt=date('Y-m-01 ',strtotime("First Day Of  $monthName $years")) . '<br/>';
$todt=date('Y-m-d ',strtotime("Last Day of $monthName $years")) . '<br/>';

$num_sundays='';                
for ($i = 0; $i < ((strtotime($todt) - strtotime($fromdt)) / 86400); $i++)
{
    if(date('l',strtotime($fromdt) + ($i * 86400)) == 'Sunday')
    {
            $num_sundays++;
    }
}
?>