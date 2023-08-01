<?php

namespace App\Models;

use CodeIgniter\Model;

class ScoreModel extends Model
{
    protected $table = 'score'; // Replace 'match' with the actual table name

    protected $allowedFields = ['home_score', 'away_score', 'match_id']; // Add the allowed fields here

    public function getScores()
    {
        return $this->findAll();
    }
    public function updateByMatchId($matchId, $data)
    {
        return $this->where('match_id', $matchId)->update($data);
    }
}
