<?php
namespace App\Controllers;

use Core\Controller;

class NewsController extends Controller
{
    private $categories = [
        ['id' => 1, 'name' => 'Match Reports'],
        ['id' => 2, 'name' => 'Transfers'],
        ['id' => 3, 'name' => 'History'],
        ['id' => 4, 'name' => 'Youth'],
        ['id' => 5, 'name' => 'Women\'s Team'],
    ];

    private $articles = [
        [
            'id' => 1,
            'title' => 'Real Madrid Wins Champions League Final',
            'excerpt' => 'A stunning victory at Wembley as Real Madrid claim their 15th European title.',
            'category_id' => 1,
            'date' => '2025-06-01',
            'image' => 'https://via.placeholder.com/600x400'
        ],
        [
            'id' => 2,
            'title' => 'New Star Striker Signs 5-Year Deal',
            'excerpt' => 'Club announces signing of Norwegian wonderkid from Molde FK.',
            'category_id' => 2,
            'date' => '2025-05-28',
            'image' => 'https://via.placeholder.com/600x400'
        ],
        [
            'id' => 3,
            'title' => 'The Legacy of Santiago Bernabéu',
            'excerpt' => 'Looking back at the legendary president who shaped Real Madrid.',
            'category_id' => 3,
            'date' => '2025-05-25',
            'image' => 'https://via.placeholder.com/600x400'
        ],
        [
            'id' => 4,
            'title' => 'Youth Team Wins Domestic Double',
            'excerpt' => 'Castilla dominates youth league with talented new generation.',
            'category_id' => 4,
            'date' => '2025-05-20',
            'image' => 'https://via.placeholder.com/600x400'
        ],
        [
            'id' => 5,
            'title' => 'Women\'s Team Advances to Champions League Semis',
            'excerpt' => 'Historic victory against Lyon puts team one step from final.',
            'category_id' => 5,
            'date' => '2025-05-18',
            'image' => 'https://via.placeholder.com/600x400'
        ],
        [
            'id' => 6,
            'title' => 'Tactical Analysis: How Madrid Dominated Midfield',
            'excerpt' => 'Breaking down the strategic masterclass against Bayern Munich.',
            'category_id' => 1,
            'date' => '2025-05-15',
            'image' => 'https://via.placeholder.com/600x400'
        ],
    ];

    public function indexAction()
    {
        $page = $_GET['page'] ?? 1;
        $category = $_GET['category'] ?? null;
        $perPage = 4;
        
        // Filter articles by category if selected
        $filteredArticles = $category 
            ? array_filter($this->articles, fn($a) => $a['category_id'] == $category)
            : $this->articles;
        
        // Pagination
        $totalArticles = count($filteredArticles);
        $totalPages = ceil($totalArticles / $perPage);
        $offset = ($page - 1) * $perPage;
        $articles = array_slice($filteredArticles, $offset, $perPage);

        $this->render('news/index', [
            'title' => 'Latest News',
            'articles' => $articles,
            'categories' => $this->categories,
            'currentCategory' => $category,
            'currentPage' => $page,
            'totalPages' => $totalPages
        ]);
    }
}
