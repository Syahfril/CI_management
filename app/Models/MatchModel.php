<?php

namespace App\Models;

use CodeIgniter\Model;

class MatchModel extends Model
{
    protected $table = 'match'; // Replace 'match' with the actual table name

    protected $allowedFields = ['home', 'away', 'dates','admin_id']; // Add the allowed fields here

    public function getMatches()
    {
        return $this->findAll();
    }

    // public function getMatchesWithScores()
    // {
    //     $builder = $this->db->table('match');
    //     $builder->select('match.*,score.id, score.home_score, score.away_score');
    //     $builder->join('score', 'score.match_id = match.id');
    //     $query = $builder->get();

    //     return $query->getResult();
    // }

    public function getMatchesWithScores()
    {
        $builder = $this->db->table('match');
        $builder->select('match.*, score.id AS score_id, score.home_score, score.away_score');
        $builder->join('score', 'score.match_id = match.id');
        $query = $builder->get();

        return $query->getResult();
    }

    

}
