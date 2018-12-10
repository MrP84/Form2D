<?php

abstract class Form2d {

  /**
   * @var integer x position of the svg form center
   */
  private $x;
  /**
   * @var integer y position of the svg form center
   */
  private $y;
  /**
   * @var string fill color = background color
   */
  private $fillColor;
  /**
   * @var string stroke color
   */
  private $strokeColor;

  /**
   * @var integer stroke width
   */
  private $strokeWidth;

  /**
   * Constructeur d'un objet de type forme 2D
   * @param void
   * @return void
   */
  public function __construct() {
    $this->x            = 0;
    $this->y            = 0;
    $this->fillColor    = 'black';
    $this->strokeColor  = 'black';
    $this->strokeWidth  = 1;
  }

  abstract public function draw();

    /**
     * Get the value of x
     *
     * @return integer x position of the svg form center
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @param integer x position of the svg form center x
     *
     * @return self
     */
    public function setX(integer x position of the svg form center $x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     *
     * @return integer y position of the svg form center
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @param integer y position of the svg form center y
     *
     * @return self
     */
    public function setY(integer y position of the svg form center $y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get the value of Fill Color
     *
     * @return string fill color = background color
     */
    public function getFillColor()
    {
        return $this->fillColor;
    }

    /**
     * Set the value of Fill Color
     *
     * @param string fill color = background color fillColor
     *
     * @return self
     */
    public function setFillColor(string fill color = background color $fillColor)
    {
        $this->fillColor = $fillColor;

        return $this;
    }

    /**
     * Get the value of Stroke Color
     *
     * @return string stroke color
     */
    public function getStrokeColor()
    {
        return $this->strokeColor;
    }

    /** 
     * Set the value of Stroke Color
     *
     * @param string stroke color strokeColor
     *
     * @return self
     */
    public function setStrokeColor(string stroke color $strokeColor)
    {
        $this->strokeColor = $strokeColor;

        return $this;
    }

    /**
     * Get the value of Stroke Width
     *
     * @return integer stroke width
     */
    public function getStrokeWidth()
    {
        return $this->strokeWidth;
    }

    /**
     * Set the value of Stroke Width
     *
     * @param integer stroke width strokeWidth
     *
     * @return self
     */
    public function setStrokeWidth(integer stroke width $strokeWidth)
    {
        $this->strokeWidth = $strokeWidth;

        return $this;
    }

}
