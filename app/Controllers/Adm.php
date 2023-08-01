<?php

namespace App\Controllers;

class Adm extends BaseController
{

    //dashboard or match section
    public function index()
    {
        $matchModel = new \App\Models\MatchModel();

        // Get the match data from the model
        $data['matches'] = $matchModel->getMatches();
        

        // Load the view and pass the data to it
        echo view('adminPage/dashboard', $data);
        
    }

    public function insertMatch()
    {
        // Load the model for the match table
        $matchModel = new \App\Models\MatchModel();
        $scoreModel = new \App\Models\ScoreModel();

        // Get the form input values
        $home = $this->request->getPost('home');
        $away = $this->request->getPost('away');
        $dates = $this->request->getPost('dates');
        $adminId = $this->request->getPost('admin_id');
        
        

        // Create an array with the match data
        $data = [
            'home' => $home,
            'away' => $away,
            'dates' => $dates,
            'admin_id' => $adminId
        ];

        

        // Insert the match data into the database
        $matchModel->insert($data);
       
        //dd($home, $away, $dates, $adminId);
        // Redirect to the index method to refresh the view

        $matchId = $matchModel->getInsertID();

        // Create an array with the score data
        $scoreData = [
            'match_id' => $matchId
        ];

        // Insert the score data into the database
        $scoreModel->insert($scoreData);
        return redirect()->to('adm');
    }

    public function deleteMatch($matchId)
    {
        // Load the model for the match table
        $matchModel = new \App\Models\MatchModel();

        // Delete the match record from the database
        $matchModel->delete($matchId);

        // Redirect to the index method to refresh the view
        return redirect()->to('adm');
    }


    public function updateMatch($matchId)
    {
        // Retrieve the match data from the database using the $matchId
        $matchModel = new \App\Models\MatchModel();
        $match = $matchModel->find($matchId);

        if ($this->request->getMethod() === 'post') {
            // Handle the form submission and update the match data in the database

            $home = $this->request->getPost('home');
            $away = $this->request->getPost('away');
            $dates = $this->request->getPost('dates');

            // Perform validation, update the match data, etc.

            // Assuming you have a method to update the match data
            $matchModel->update($matchId, [
                'home' => $home,
                'away' => $away,
                'dates' => $dates
            ]);

            // Redirect back to the previous page
            return redirect()->to('adm')->with('success', 'Match updated successfully');
        }

        // Pass the match data to the update page
        return view('adminPage/edit-match', ['match' => $match]);
    }

    //score section
    public function moveToScore()
    {
        $matchModel = new \App\Models\MatchModel();
        $matches = $matchModel->getMatchesWithScores();

        $data['matches'] = $matches;

        return view('adminPage/score', $data);
        
    }

    public function updateScore($matchId)
    {
        $matchModel = new \App\Models\MatchModel();
        $match = $matchModel->find($matchId);
        //dd($matchI);
       
        if ($this->request->getMethod() === 'post') {
            $homeScore = $this->request->getVar('home_score');
            $awayScore = $this->request->getVar('away_score');
    
            // Update the scores in the score table
            $scoreModel = new \App\Models\ScoreModel();
            $scoreData = [
                'home_score' => $homeScore,
                'away_score' => $awayScore,
            ];
        
            
            // Check if a score record already exists for the match
            $existingScore = $scoreModel->where('match_id', $matchId)->first();
    
            if ($existingScore) {
                $scoreModel->update($existingScore['id'], $scoreData);
            } else {
                // Create a new score record if it doesn't exist
                $scoreData['match_id'] = $matchId;
                $scoreModel->insert($scoreData);
            }
    
            return redirect()->to('adm/moveToScore')->with('success', 'Score updated successfully');
        }
    
        $data['match'] = $match;
        return view('adminPage/edit-score', $data);
    }

    public function deleteScore($scoreId)
    {
        // Load the model for the match table
        $scoreModel = new \App\Models\ScoreModel();

        // Delete the match record from the database
        $scoreModel->delete($scoreId);

        // Redirect to the index method to refresh the view
        return redirect()->to('adm/moveToScore');
    }

    //player section
    public function moveToPlayer()
    {
        $playerModel = new \App\Models\PlayerModel();

        // Get the match data from the model
        $data['players'] = $playerModel->getPlayer();
        

        // Load the view and pass the data to it
        return view('adminPage/player', $data);
        
    }

    public function insertPlayer()
    {
        // Load the model for the match table
        $playerModel = new \App\Models\PlayerModel();

        // Get the form input values
        $player_name = $this->request->getPost('player_name');
        $player_dob = $this->request->getPost('player_dob');
        $position = $this->request->getPost('position');
        $join_date = $this->request->getPost('join_date');
        $contract_duration = $this->request->getPost('contract_duration');
        $status = $this->request->getPost('status');
        $admin_id = $this->request->getPost('admin_id');
                
        

        // Create an array with the match data
        $data = [
            'player_name' => $player_name,
            'player_dob' => $player_dob,
            'position' => $position,
            'join_date' => $join_date,
            'contract_duration' => $contract_duration,
            'status' => $status,
            'admin_id' => $admin_id
        ];

        // Insert the match data into the database
        $playerModel->insert($data);
        //dd($home, $away, $dates, $adminId);
        // Redirect to the index method to refresh the view
        return redirect()->to('adm/moveToPlayer');
    }

    public function deletePlayer($playerId)
    {
        // Load the model for the match table
        $playerModel = new \App\Models\PlayerModel();

        // Delete the match record from the database
        $playerModel->delete($playerId);

        // Redirect to the index method to refresh the view
        return redirect()->to('adm/moveToPlayer');
    }


    public function updatePlayer($playerId)
    {
        // Retrieve the match data from the database using the $matchId
        $playerModel = new \App\Models\PlayerModel();
        $player = $playerModel->find($playerId);

        if ($this->request->getMethod() === 'post') {
            // Handle the form submission and update the match data in the database

            $player_name = $this->request->getPost('player_name');
            $player_dob = $this->request->getPost('player_dob');
            $position = $this->request->getPost('position');
            $join_date = $this->request->getPost('join_date');
            $contract_duration = $this->request->getPost('contract_duration');
            $status = $this->request->getPost('status');
            $admin_id = $this->request->getPost('admin_id');
            

            // Perform validation, update the match data, etc.

            // Assuming you have a method to update the match data
            $playerModel->update($playerId, [
                'player_name' => $player_name,
                'player_dob' => $player_dob,
                'position' => $position,
                'join_date' => $join_date,
                'contract_duration' => $contract_duration,
                'status' => $status,
                'admin_id' => $admin_id
       
            ]);

            // Redirect back to the previous page
            return redirect()->to('adm/moveToPlayer')->with('success', 'Player updated successfully');
        }

        // Pass the match data to the update page
        return view('adminPage/edit-player', ['player' => $player]);
    }

    //staff section
    public function moveToStaff()
    {
        $staffModel = new \App\Models\StaffModel();

        // Get the match data from the model
        $data['staffs'] = $staffModel->getStaff();
        

        // Load the view and pass the data to it
        return view('adminPage/staff', $data);
        
    }

    public function insertStaff()
    {
        // Load the model for the match table
        $staffModel = new \App\Models\StaffModel();

        // Get the form input values
        $staff_name = $this->request->getPost('staff_name');
        $staff_dob = $this->request->getPost('staff_dob');
        $position = $this->request->getPost('position');
        $join_date = $this->request->getPost('join_date');
        $admin_id = $this->request->getPost('admin_id');
                
        

        // Create an array with the match data
        $data = [
            'staff_name' => $staff_name,
            'staff_dob' => $staff_dob,
            'position' => $position,
            'join_date' => $join_date,
            'admin_id' => $admin_id
        ];

        // Insert the match data into the database
        $staffModel->insert($data);
        //dd($home, $away, $dates, $adminId);
        // Redirect to the index method to refresh the view
        return redirect()->to('adm/moveToStaff');
    }

    public function deleteStaff($staffId)
    {
        // Load the model for the match table
        $staffModel = new \App\Models\StaffModel();

        // Delete the match record from the database
        $staffModel->delete($staffId);

        // Redirect to the index method to refresh the view
        return redirect()->to('adm/moveToStaff');
    }

    public function updateStaff($staffId)
    {
        // Retrieve the match data from the database using the $matchId
        $staffModel = new \App\Models\StaffModel();
        $staff = $staffModel->find($staffId);

        if ($this->request->getMethod() === 'post') {
            // Handle the form submission and update the match data in the database

            $staff_name = $this->request->getPost('staff_name');
            $staff_dob = $this->request->getPost('staff_dob');
            $position = $this->request->getPost('position');
            $join_date = $this->request->getPost('join_date');
            $admin_id = $this->request->getPost('admin_id');

           
            

            // Perform validation, update the match data, etc.

            // Assuming you have a method to update the match data
            $staffModel->update($staffId, [
                'staff_name' => $staff_name,
                'staff_dob' => $staff_dob,
                'position' => $position,
                'join_date' => $join_date,
                'admin_id' => $admin_id
       
            ]);

            // Redirect back to the previous page
            return redirect()->to('adm/moveToStaff')->with('success', 'staff updated successfully');
        }

        // Pass the match data to the update page
        return view('adminPage/edit-staff', ['staff' => $staff]);
    }


}





