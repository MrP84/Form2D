<?php

class Paint {

  /**
   * @var integer width of the svg tag
   */
  private $width;

  /**
   * @var integer height of the svg tag
   */
  private $height;

  /**
   * @var array contains the list of all the shapes to be drawn
   */
  private $collection = [];

  public function __construct($w, $h) {
    $this->width = $w;
    $this->height = $h;
  }

  public function add(Form2d $shape) {
    $this->collection[] = $shape;
    return $this;
  }

  public function render() {
    $svg = '<svg width="' . $this->width . '" height="' . $this->height . '">';
    foreach ($this->collection as $shape) {
      $svg .= $shape->draw();
    }
    $svg .= '</svg>';
    return $svg;
  }
}
