<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use App\Models\Industrial;
use App\Models\Aerial;
use App\Models\Land;
use App\Models\Technical;

class RobotsController extends Controller {
    $robots = [];
    $technicals = [];

    public function __construct(
        $technical1 = new Technical("Technical 1", "tech1@example.com", "password1");
        $technical2 = new Technical("Technical 2", "tech2@example.com", "password2");
        $industrial = new Industrial("Industrial Robot 1", "Industrial", "High", "Metal", 500);
        $aerial = new Aerial("Aerial Robot 1", "Aerial", "High", "Plastic", "8 hours", "Battery");
        $land = new Land("Land Robot 1", "Land", "Medium", "Steel", "12 hours", "4 wheels");
    )
    public function index(){}
    public function show(Robot $name){}
    public function formReview(){}
    public function review(){}
}