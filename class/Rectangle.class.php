<?php

class Rectangle extends Form2d {

  /**
   * @var integer
   */
  private $width;
  /**
   * @var integer
   */
  private $height;

  /**construct a rectangle
   *
   * @param integer $w width of the form
   * @param integer $h height of the form
   * @return void
   */
  public function __construct($w=10, $h=50) {
    parent::__construct();
    $this->width = $w;
    $this->height = $h;
    //echo $this->getFillColor();
  }
  /**
   * return the svg code to draw a rectangle
   * @return string svg code
   */
  public function draw() {
    return '<rect x="'.$this->getX().'" y="'.$this->getY().'" width="'.$this->width.'" height="'.$this->height.'"
            style="fill:'.$this->getFillColor().';stroke-width:'.$this->getStrokeWidth().';stroke:'.$this->getStrokeColor().'" />';
  }

    /**
     * Get the value of Width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of Width
     *
     * @param integer width
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of Height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of Height
     *
     * @param integer height
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

}
