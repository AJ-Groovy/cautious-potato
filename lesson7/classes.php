<?php

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$worker = new Worker();
$worker->name = 'John';
$worker->age = 25;
$worker->salary = 1000;

$worker_two = new Worker();
$worker_two->name = 'Vasya';
$worker_two->age = 26;
$worker_two->salary = 2000;

echo $worker->age + $worker_two->age;
echo '<br>';
echo $worker->salary + $worker_two->salary;
