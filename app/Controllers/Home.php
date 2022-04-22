<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }




    public function workdays($str, $ed){ // this funtion can receive parameters in miliseconds or normal date (dd-mm-yyyy)

        $startCorrectFormat = explode('-', $str); // split params in '-' character
        $endCorrectFormat = explode('-', $ed);

        $start = 0;
        $end = 0;

        if(count($startCorrectFormat) <= 1){ // if 'startCorrectFormat' have more than 1 position is in dd-mm-yyyy format
            $dateOne = $str / 1000;
            $start = date("d-m-Y", $dateOne); // convert millisecodns in d-m-y format
        }else{
            $start = $str;
        }

        // works the same as the block before, but with the second date
        if(count($endCorrectFormat) <= 1){
            $dateTwo = $ed / 1000;
            $end = date("d-m-Y", $dateTwo);
        }else{
            $end = $ed;
        }


            $startDate=strtotime($start);
            $endDate=strtotime($end);

        // echo "<br>".$start."----".$end;

        if($endDate < $startDate){
            echo 'The end date is before start date';
        }else{

            // iterate all days between that two dates
            $cont = 0;

            for($i=$startDate; $i<=$endDate; $i+=86400){
                // echo date("d-m-Y", $i)."<br>";
                setlocale(LC_TIME, 'es-MX');
                // echo strftime("%a").'<br>';

                $newDate = date("d-m-Y", strtotime(date("d-m-Y", $i)));				
                $shortNameDay = strftime("%u", strtotime($newDate));

                // if($shortNameDay != 7 || $shortNameDay != 6 )

                if($shortNameDay == 7 ){
                }else if ($shortNameDay == 6 ) {
                }else{
                    $fullDate = strftime("%A, %e de %B del %G", strtotime($newDate));
                    echo $fullDate.'<br>';
                    $cont++;
                }

            }

            echo '<br>'."El número de días habiles entre las fechas proporcionadas es de: ".$cont;

        }


    }



    public function fibonacci( $times ) // $times is the number of cycles that are made
    {

        if($times <= 0){  // validation in the paraman of the function
            echo 'value is negative, cero or is not a number';
        }else{
            $start      = 0; // finonacci start in'0'
            $current    = 1; // the second number in the series is '1'
            $next       = 2; // and in this case '2' is the next value

            echo $start.'<br>';

            for ($i=1; $i < $times; $i++) { // inside this for print the current value
                
                echo $current.'<br>';

                $next       = $start + $current;   // the value of next is the sum of the two previus numbers
                $start      = $current;
                $current    = $next;
            }
        }
        
    }



    public function highestNumber(){

        $myArray = array(13,2,4,35,1,35);

        rsort($myArray);  // sort ascending order the array

        echo $myArray[0]; // print the first position of the array

    }





}
