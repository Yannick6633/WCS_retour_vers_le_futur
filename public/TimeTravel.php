<?php



class TimeTravel

{
    private $start;
    private $end;



    public function __construct(dateTime $start, dateTime $end)
    {
        $this->start = $start;

        $this->end = $end;
    }

    public function getTravelInfo()
    {
        $difference = $this->start->diff($this->end);
        return $difference->format("Il y a %Y années, %M mois, %D jours, %h heures, %i minutes et %s secondes entre les deux dates");
    }

    public function findDate(int $interval)
    {

        //$date = new DateTime('1985-12-31');
        $interval = new DateInterval("PT" . $interval . "S");
        $this->start->sub($interval);
        return $this->start->format('Y-m-d H:i:s');




    }

    public function backToFutureStepByStep($step) : array
    {

        $result = [];
        $steps = new DatePeriod($this->start, $step, $this->end);

        foreach ($steps as $date)
        {
            $result[] = $date->format("M,d,Y,A,H");
        }

        return $result;

    }


}
