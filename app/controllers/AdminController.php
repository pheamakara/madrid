<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboardAction()
    {
        if (!$this->isAdmin()) {
            $this->redirect('/admin/login');
            return;
        }

        $this->render('admin/dashboard', [
            'title' => 'Admin Dashboard'
        ]);
    }

    public function loginAction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $userModel = new User();
            $user = $userModel->findByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                $this->redirect('/admin/dashboard');
                return;
            } else {
                $error = 'Invalid username or password';
            }
        }

        $this->render('admin/login', [
            'title' => 'Admin Login',
            'error' => $error ?? null
        ]);
    }

    public function logoutAction()
    {
        session_destroy();
        $this->redirect('/admin/login');
    }

    public function usersAction()
    {
        if (!$this->isAdmin()) {
            $this->redirect('/admin/login');
            return;
        }

        $userModel = new User();
        $users = $userModel->getAll();

        $this->render('admin/users', [
            'title' => 'Manage Users',
            'users' => $users
        ]);
    }

    public function createUserAction()
    {
        if (!$this->isAdmin()) {
            $this->redirect('/admin/login');
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'role' => $_POST['role']
            ];

            $userModel = new User();
            if ($userModel->create($data)) {
                $this->redirect('/admin/users');
                return;
            } else {
                $error = 'Failed to create user';
            }
        }

        $this->render('admin/user_form', [
            'title' => 'Create User',
            'user' => null,
            'error' => $error ?? null
        ]);
    }

    public function editUserAction($id)
    {
        if (!$this->isAdmin()) {
            $this->redirect('/admin/login');
            return;
        }

        $userModel = new User();
        $user = $userModel->find($id);

        if (!$user) {
            $this->redirect('/admin/users');
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'role' => $_POST['role']
            ];

            if (!empty($_POST['password'])) {
                $data['password'] = $_POST['password'];
            }

            if ($userModel->update($id, $data)) {
                $this->redirect('/admin/users');
                return;
            } else {
                $error = 'Failed to update user';
            }
        }

        $this->render('admin/user_form', [
            'title' => 'Edit User',
            'user' => $user,
            'error' => $error ?? null
        ]);
    }

    public function deleteUserAction($id)
    {
        if (!$this->isAdmin()) {
            $this->redirect('/admin/login');
            return;
        }

        $userModel = new User();
        $userModel->delete($id);
        $this->redirect('/admin/users');
    }

    public function postsAction()
    {
        if (!$this->isAdmin()) {
            $this->redirect('/admin/login');
            return;
        }

        $this->render('admin/posts', [
            'title' => 'Manage Posts'
        ]);
    }

    private function isAdmin()
    {
        return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
    }
}
