<?php
class DateDiff {
    
    //declaring the start and end dates public varibles
    public $startDate, $endDate;
    public function __construct($startDate, $endDate) {
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
    }

    //function to calculate the date deference
    public function calculateDiff() {
        $interval = $this->startDate->diff($this->endDate);
        return "Difference: " . $interval->y . " years, " . $interval->m . " months, " . $interval->d . " days";
    }
}

//pass two dates within the constructor and then their deference will be calculate
$dateDiff = new DateDiff("1981-11-03", "2013-09-04");

//output the result
echo $dateDiff->calculateDiff();