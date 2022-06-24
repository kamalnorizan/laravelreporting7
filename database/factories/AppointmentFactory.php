<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Appointment;
use Faker\Generator as Faker;

$factory->define(Appointment::class, function (Faker $faker) {
    $day = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"];
    $cat = ['Appointment','Fulfilled','Booked','Arrived','No Show','Reschedule'];
    return [
        'day'=>$day[rand(0,6)],
        'category'=>$cat[rand(0,5)]
    ];
});
