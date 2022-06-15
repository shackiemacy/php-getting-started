<?php
// your code goes here
// $myName= "Macy";
// $finaloutput ="my name is called" .' ' .$myName;
// echo $finaloutput;  
// Arrays
// $students= array("Sheila","Caleb","Raychelle","Emmanuel","Stephen");
// echo $students[2];
// echo count ($student);

$programMarks = array("assignments" =>25,
                        "CAT"=>20,
                        "Attendance"=>8,
                        "Projects"=>45
                    );
echo "CAT:" .$prgramMarks["CAT"];

// Multidimentional array
$Webtechnologies =array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend'=> array('PHP','JS','Python','Java'),
    'Databases'=> array('mySQL','postgreSQL','mongoDB','firebase')
);
echo $Webtechnologies['frontend'][2];
echo $Webtechnologies['backend'][0];
echo $Webtechnologies['Databases'][2];


?>