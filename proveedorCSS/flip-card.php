<?php 
  $flipCardCss = '
                  background-color: transparent;
                  width: 450px;
                  height: 250px;
                  margin: 20px auto;
                  border: 1px solid red;
                  perspective: 1000px;
  ';
  $style_1 = new Style('.flip-card', $flipCardCss);

  $flipCardInner = '
                  position: relative;
                  width: 100%;
                  height: 100%;
                  text-align: center;
                  transition: transform 0.8s;
                  transform-style: preserve-3d;
  ';
  $style_2 = new Style('.flip-card-inner', $flipCardInner);

  $flipCardInnerHover = '
                  transform: rotateY(180deg);
  ';
  $style_3 = new Style('.flip-card:hover .flip-card-inner', $flipCardInnerHover);

  $flipCardFB = '
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
  ';
  $style_4 = new Style(".flip-card-front, .flip-card-back", $flipCardFB);

  $flipCardBack = '
                  transform: rotateY(180deg);
  ';
  $style_5 = new Style(".flip-card-back", $flipCardBack);


  echo ($style_1->agregarStyle());
  echo ($style_2->agregarStyle());
  echo ($style_3->agregarStyle());
  echo ($style_4->agregarStyle());
  echo ($style_5->agregarStyle());

?>