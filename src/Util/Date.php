<?php namespace Util;

require_once 'DateException.php';

class Date
{
    private $day;
    private $month;
    private $year;
    private const MONTHS = array("jan", "feb", "mrt", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec");

    // ---------------------- 2 B => constructor van public naar private gemaakt
    private function __construct($day = 1, $month = 1, $year = 2008)
    {
        try {
            if($day<1 || $day>31){
                throw new DateException("day is out of bounds, not a real day u stupid shit");
            }elseif($month<1 || $month>12){
                throw new DateException("month is out of bounds, not a real month u stupid shit");
            }elseif ($year<1500 || $year>2020){
                throw new DateException("year is out of bounds, not a real year u stupid shit");
            }else{
                $this->day=$day;
                $this->month=$month;
                $this->year=$year;
            }
        }catch (DateException $dateException){
            print $dateException->getMessage();
            exit();
        }
    }

    // ---------------------- 2 B
    public static function make($day = 1, $month = 1, $year = 2008){
        return new Date($day, $month, $year);
    }
    // ---------------------- 2 B


    public function print()
    {
        return "$this->day/$this->month/$this->year";
    }

    public function printMonth(){
        $maand = self::MONTHS[$this->month - 1];
        return "$this->day/$maand/$this->year";
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getYear()
    {
        return $this->year;
    }


    public function changeDay($day)
    {
        return new self($day, $this->month, $this->year);
    }

    public function changeMonth($month)
    {
        return new self($this->day, $month, $this->year);
    }

    public function changeYear($year)
    {
        return new self($this->day, $this->month, $year);
    }




}