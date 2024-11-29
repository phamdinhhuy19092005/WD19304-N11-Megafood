<?php
require_once __DIR__ . '/../../config/database.php';

class News
{
    private $conn;
    private $table = 'news';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    // Lấy tất cả tin tức
    public function getAllNews()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $news = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $news;
    }
}
