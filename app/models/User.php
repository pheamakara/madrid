<?php
namespace App\Models;

use Core\Model;
use PDO;

class User extends Model
{
    protected $table = 'users';

    public function create($data)
    {
        $sql = "INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':password' => password_hash($data['password'], PASSWORD_DEFAULT),
            ':role' => $data['role']
        ]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE users SET username = :username, email = :email, role = :role WHERE id = :id";
        $params = [
            ':id' => $id,
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':role' => $data['role']
        ];

        if (!empty($data['password'])) {
            $sql = "UPDATE users SET username = :username, email = :email, password = :password, role = :role WHERE id = :id";
            $params[':password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }

    public function findByUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
