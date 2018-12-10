<?php

class Ellipse extends Form2d {

  /**
   * @var integer gives the horizontal radius
   */
  private $xRadius;
  /**
   * @var integer gives the vertical radius
   */
  private $yRadius;

  public function __construct($rx, $ry) {
    parent::__construct();
    $this->xRadius = $rx;
    $this->yRadius = $ry;
  }

  public function draw() {
    return '<ellipse cx="'.$this->getX().'" cy="'.$this->getY().'" rx="'.$this->xRadius.'" ry="'.$this->yRadius .'"
            style="fill:'.$this->getFillColor().';stroke-width:'.$this->getStrokeWidth().';stroke:'.$this->getStrokeColor().'" />';
  }


    /**
     * Get the value of Radius
     *
     * @return integer gives the horizontal radius
     */
    public function getXRadius()
    {
        return $this->xRadius;
    }

    /**
     * Set the value of Radius
     *
     * @param integer gives the horizontal radius xRadius
     *
     * @return self
     */
    public function setXRadius(integer $xRadius)
    {
        $this->xRadius = $xRadius;

        return $this;
    }

    /**
     * Get the value of Radius
     *
     * @return integer gives the vertical radius
     */
    public function getYRadius()
    {
        return $this->yRadius;
    }

    /**
     * Set the value of Radius
     *
     * @param integer gives the vertical radius yRadius
     *
     * @return self
     */
    public function setYRadius(integer $yRadius)
    {
        $this->yRadius = $yRadius;

        return $this;
    }

}
