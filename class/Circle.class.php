<?php

class Circle extends Ellipse {

  public function __construct($rx=100) {
    parent::__construct($rx, $rx);
  }
}
