<?php

class Polygon extends form2d {

  /** contains the collection of points to be used for the polygon construction
   * @var array
   */
  private $points = [];

  /**
   * @var string
   */
  private $fillRule;

  public function __construct(array $init=[25,25]) {
    parent::__construct();
    $this->points[] = $init;
  }

  public function addPoints(array $coord) {
    $this->points[] = $coord;
    return $this;
  }

  public function draw() {
    //$brackets = array("[", "]");
    $svg = '<polygon points="';
    // foreach ($this->points as $key => $value) {
    //   $svg .= " " . str_replace($brackets, "", $value);
    // }
    foreach ($this->points as $key => $value) {
      $svg .= " " . implode(",", $value);
    }
    $svg .= '" style="fill:' . $this->getFillColor() . '; stroke:' . $this->getStrokeColor() . ';stroke-width:' . $this->getStrokeWidth() . ';fill-rule:' . $this->fillRule . ';" />';
    return $svg;
  }



    /**
     * Get the value of Points
     *
     * @return array
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set the value of Points
     *
     * @param array points
     *
     * @return self
     */
    public function setPoints(array $points)
    {
        $this->points = $points;

        return $this;
    }


    /**
     * Get the value of Fill Rule
     *
     * @return string
     */
    public function getFillRule()
    {
        return $this->fillRule;
    }

    /**
     * Set the value of Fill Rule
     *
     * @param string fillRule
     *
     * @return self
     */
    public function setFillRule($fillRule)
    {
        $this->fillRule = $fillRule;

        return $this;
    }

}
