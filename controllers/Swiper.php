<?php

class Swiper {
    private $extra, $list, $currentPrice, $oldPrice;
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new \PDO('mysql:host=127.0.0.1;dbname=check_ups;charset=utf8', 'root', 'root');
        } catch (\PDOException $exception) {
            http_response_code(418);
            echo json_encode($exception->getMessage());
        }
    }

    public function getAllNotes()
    {
        $statement = $this->connection->prepare("SELECT * FROM `texts`");

        if ($statement->execute()) {
            $data = $statement->fetchAll(PDO::FETCH_ASSOC);
            $newArray = [];

            foreach ($data as $cardInfo) {
                $newArray[] = [
                    "extra" => $cardInfo['extra'],
                    "list" => explode(";", $cardInfo['list']),
                    "current_price" => $cardInfo['current_price'],
                    "old_price" => $cardInfo['old_price']
                ];
            }

            return $newArray;
        } else {
            echo 'Что-то пошло не так...';
            die();
        }
    }
}