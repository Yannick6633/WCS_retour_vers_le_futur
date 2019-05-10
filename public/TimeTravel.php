<?php



class TimeTravel
{
    /**
     * @var DateTime
     */

    public $start;

    /**
     * @var DateTime
     */

    public $end;

    /**
     * Time constructor.
     * @param $start
     * @param $end
     */

    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;

        $this->end = $end;
    }

    /**
     * @return string
     */

    public function getTravelInfos()
    {
        $interval = $this->start->diff($this->end);

        return $interval->format("Il y a %y années, %m mois, %d jours, %h heures, %m minutes
         et %s secondes entre les deux dates");
    }

    /**
     * @return DateTime
     */

    public function findDate($interval) : DateTime
    {
        return $this->start->sub($interval);
    }

    /**
     * @return array
     */

    public function backToTheFuturStepByStep($step)
    {
        $steps = [];

        $dateRange = new DatePeriod($this->start, $step, $this->end);

        foreach ($dateRange as $date) {

            $steps[] = $date->format("M d Y h:i") ;
        }
        return $steps;
    }

}



