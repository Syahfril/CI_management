<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view ('pages/home');
        
    }

    public function basef()
    {
        return view('pages/base-frontend');
    }

    public function baseb()
    {
        return view('base-backend');
    }

    public function player_list()
    {
        $playerModel = new \App\Models\PlayerModel();

        // Get the match data from the model
        $data['players'] = $playerModel->getPlayer();
        

        // Load the view and pass the data to it
        return view ('pages/player-list',$data);
    }

    public function schedule()
    {
        $matchModel = new \App\Models\MatchModel();
        $matches = $matchModel->getMatchesWithScores();

        $data['matches'] = $matches;

        return view('pages/schedule', $data);
    }

    public function finance()
    {
        $financeModel = new \App\Models\FinanceModel();
        $finances = $financeModel->findAll();

        return view('pages/finance', ['finances' => $finances]);
    }

    public function staff()
    {
        $staffModel = new \App\Models\StaffModel();

        // Get the match data from the model
        $data['staffs'] = $staffModel->getStaff();
        

        // Load the view and pass the data to it
        return view('pages/staff', $data);
        
    }

    public function gallery()
    {
        $model = new \App\Models\ImageModel();
        $data['images'] = $model->getImages();

        
        return view('pages/gallery', $data);
        
    }
}
