<?php
namespace App\Controllers;

use Core\Controller;

class MatchController extends Controller
{
    private $fixtures = [
        [
            'id' => 1,
            'home_team' => 'Real Madrid',
            'away_team' => 'FC Barcelona',
            'competition' => 'La Liga',
            'date' => '2025-06-10 20:00',
            'venue' => 'Santiago Bernabéu',
            'home_score' => null,
            'away_score' => null,
            'status' => 'upcoming'
        ],
        [
            'id' => 2,
            'home_team' => 'Atlético Madrid',
            'away_team' => 'Real Madrid',
            'competition' => 'La Liga',
            'date' => '2025-05-28 21:00',
            'venue' => 'Metropolitano Stadium',
            'home_score' => 1,
            'away_score' => 3,
            'status' => 'completed'
        ],
        [
            'id' => 3,
            'home_team' => 'Real Madrid',
            'away_team' => 'Bayern Munich',
            'competition' => 'Champions League',
            'date' => '2025-05-20 20:00',
            'venue' => 'Santiago Bernabéu',
            'home_score' => 2,
            'away_score' => 2,
            'status' => 'completed'
        ],
    ];

    private $players = [
        [
            'id' => 1,
            'name' => 'Vinicius Junior',
            'position' => 'Forward',
            'nationality' => 'Brazil',
            'appearances' => 42,
            'goals' => 23,
            'assists' => 15,
            'rating' => 8.2
        ],
        [
            'id' => 2,
            'name' => 'Jude Bellingham',
            'position' => 'Midfielder',
            'nationality' => 'England',
            'appearances' => 38,
            'goals' => 18,
            'assists' => 12,
            'rating' => 8.1
        ],
        [
            'id' => 3,
            'name' => 'Thibaut Courtois',
            'position' => 'Goalkeeper',
            'nationality' => 'Belgium',
            'appearances' => 35,
            'clean_sheets' => 18,
            'saves' => 127,
            'rating' => 7.9
        ],
    ];

    public function fixturesAction()
    {
        $this->render('match/fixtures', [
            'title' => 'Fixtures & Results',
            'fixtures' => $this->fixtures
        ]);
    }

    public function statsAction()
    {
        $this->render('match/stats', [
            'title' => 'Player Statistics',
            'players' => $this->players
        ]);
    }
}
