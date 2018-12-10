<?php

include('class/Form2d.class.php');
include('class/Rectangle.class.php');
include('class/Paint.class.php');
include('class/Square.class.php');
include('class/Ellipse.class.php');
include('class/Circle.class.php');
include('class/Polygon.class.php');

// Vive la France
$form = new Rectangle(100,200);
$form ->setFillColor('blue')
      ->setStrokeColor('black')
      ->setStrokeWidth(1)
      ->setX(20)
      ->setY(20);

$form2 = new Rectangle(100,200);
$form2 ->setFillColor('white')
      ->setStrokeColor('black')
      ->setStrokeWidth(1)
      ->setX(120)
      ->setY(20);

$form3 = new Rectangle(100,200);
$form3 ->setFillColor('red')
      ->setStrokeColor('black')
      ->setStrokeWidth(1)
      ->setX(220)
      ->setY(20);

//Vive la Suède
$form4 = new Rectangle(300,200);
$form4 ->setFillColor('blue')
      ->setStrokeColor('black')
      ->setStrokeWidth(1)
      ->setX(20)
      ->setY(230);

$form5 = new Rectangle(300,20);
$form5 ->setFillColor('yellow')
      ->setStrokeColor('yellow')
      ->setStrokeWidth(1)
      ->setX(20)
      ->setY(300);

$form6 = new Rectangle(20,200);
$form6 ->setFillColor('yellow')
      ->setStrokeColor('yellow')
      ->setStrokeWidth(1)
      ->setX(100)
      ->setY(230);

//Vive la Suisse
$form7 = new Square(300);
$form7 ->setFillColor('red')
      ->setStrokeColor('black')
      ->setStrokeWidth(1)
      ->setX(340)
      ->setY(20);

$form8 = new Rectangle(80,200);
$form8 ->setFillColor('#FFF')
      ->setStrokeColor('#FFF')
      ->setStrokeWidth(1)
      ->setX(450)
      ->setY(70);

$form9 = new Rectangle(200,80);
$form9->setFillColor('#FFF')
      ->setStrokeColor('#FFF')
      ->setStrokeWidth(1)
      ->setX(390)
      ->setY(130);

//Vive les ellipses
$form10 = new Ellipse(100, 50);
$form10     ->setFillColor('#1d4687')
            ->setStrokeColor('#c4c454')
            ->setStrokeWidth(4)
            ->setX(780)
            ->setY(220);

$form11 = new Circle(100);
$form11     ->setFillColor('#1d4687')
            ->setStrokeColor('#c4c454')
            ->setStrokeWidth(4)
            ->setX(980)
            ->setY(220);

//Vive les triangles rectangles
$form12 = new Polygon([600,340]);
$form12     ->addPoints([600,540])->addPoints([900,540])
            ->setFillColor('#86f963')
            ->setStrokeWidth(3)
            ->setStrokeColor('black');

$form13 = new Square(20);
$form13     ->setFillColor('rgba(0,0,0,0)')
            ->setStrokeColor('black')
            ->setStrokeWidth(1)
            ->setX(600)
            ->setY(520);

//Vive les étoiles
$form14 = new Polygon([490,340]);
$form14     ->addPoints([430,508])->addPoints([580,398])->addPoints([400,398])->addPoints([550,508])
            ->setFillRule('evenodd')
            ->setFillColor('lime')
            ->setStrokeWidth(5)
            ->setStrokeColor('purple');




$niceDrawing = new Paint(1200, 800);
$niceDrawing->add($form)->add($form2)->add($form3)
            ->add($form4)->add($form5)->add($form6)
            ->add($form7)->add($form8)->add($form9)
            ->add($form10)->add($form11)
            ->add($form12)->add($form13)
            ->add($form14);
$svg = $niceDrawing->render();
echo $svg;
