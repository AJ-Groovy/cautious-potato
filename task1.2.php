<?php
define('AGE_YOUNG', 20);
define('AGE_MEDIUM_ADULT', 40);
define('AGE_ADULT', 60);
define('AGE_OLD', 80);

$age = 80;
$base_message = 'Ваш возраст ';

switch ($age) {
  case $age < AGE_YOUNG: {
      echo ($base_message . 'меньше чем ' . AGE_YOUNG);
      break;
    }
  case $age === AGE_YOUNG: {
      echo ($base_message . 'равен ' . AGE_YOUNG);
      break;
    }
  case $age > AGE_YOUNG && $age < AGE_MEDIUM_ADULT: {
      echo ($base_message . 'больше чем ' . AGE_YOUNG . ' но меньше чем ' . AGE_MEDIUM_ADULT);
      break;
    }
  case $age === AGE_MEDIUM_ADULT: {
      echo ($base_message . 'равен ' . AGE_MEDIUM_ADULT);
      break;
    }
  case $age > AGE_MEDIUM_ADULT && $age < AGE_ADULT: {
      echo ($base_message . 'больше чем ' . AGE_MEDIUM_ADULT . ' но меньше чем ' . AGE_ADULT);
      break;
    }
  case $age === AGE_ADULT: {
      echo ($base_message . 'равен ' . AGE_ADULT);
      break;
    }
  case $age > AGE_ADULT && $age < AGE_OLD: {
      echo ($base_message . 'больше чем ' . AGE_ADULT . ' но меньше чем ' . AGE_OLD);
      break;
    }
  case $age === AGE_OLD: {
      echo ($base_message . 'равен ' . AGE_OLD);
      break;
    }


  default: {
      echo ($base_message . 'больше чем ' . AGE_OLD);
    }
}
