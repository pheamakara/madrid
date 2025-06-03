<?php
namespace App\Controllers;

use Core\Controller;

class TeamController extends Controller
{
    private $playersByPosition = [
        'Goalkeepers' => [
            [
                'id' => 1,
                'name' => 'Thibaut Courtois',
                'nationality' => 'Belgium',
                'jersey_number' => 1,
                'appearances' => 35,
                'clean_sheets' => 18
            ]
        ],
        'Defenders' => [
            [
                'id' => 2,
                'name' => 'Dani Carvajal',
                'nationality' => 'Spain',
                'jersey_number' => 2,
                'appearances' => 42,
                'goals' => 3
            ],
            [
                'id' => 3,
                'name' => 'Éder Militão',
                'nationality' => 'Brazil',
                'jersey_number' => 3,
                'appearances' => 38,
                'goals' => 2
            ]
        ],
        'Midfielders' => [
            [
                'id' => 4,
                'name' => 'Jude Bellingham',
                'nationality' => 'England',
                'jersey_number' => 5,
                'appearances' => 45,
                'goals' => 19,
                'assists' => 12
            ],
            [
                'id' => 5,
                'name' => 'Aurelien Tchouameni',
                'nationality' => 'France',
                'jersey_number' => 18,
                'appearances' => 40,
                'goals' => 4,
                'assists' => 6
            ]
        ],
        'Forwards' => [
            [
                'id' => 6,
                'name' => 'Vinicius Junior',
                'nationality' => 'Brazil',
                'jersey_number' => 7,
                'appearances' => 42,
                'goals' => 23,
                'assists' => 15
            ],
            [
                'id' => 7,
                'name' => 'Rodrygo',
                'nationality' => 'Brazil',
                'jersey_number' => 11,
                'appearances' => 48,
                'goals' => 17,
                'assists' => 10
            ]
        ]
    ];

    public function indexAction()
    {
        $this->render('team/index', [
            'title' => 'Real Madrid Squad',
            'playersByPosition' => $this->playersByPosition
        ]);
    }

    public function playerAction($id)
    {
        $player = null;
        foreach ($this->playersByPosition as $position => $players) {
            foreach ($players as $p) {
                if ($p['id'] == $id) {
                    $player = $p;
                    $player['position'] = $position;
                    break 2;
                }
            }
        }

        if (!$player) {
            $this->redirect('/team');
            return;
        }

        $this->render('team/player', [
            'title' => $player['name'],
            'player' => $player
        ]);
    }
}
