<?php
// Aduce informatii din baza de date
namespace Model;

include_once 'connectDB.php';
use Model\ConnectDb;

class Model extends ConnectDb
{
    const NUME_TABEL = "product";

    public function getInfo()
    {
        $pdo = $this->connectDB();
        $data = $pdo->query("SELECT * FROM product")->fetchAll();
        return $data;
    }

    public function updateCurrencyByProductId(int $id, string $currencyName, float $price)
    {
        $pdo = $this->connectDB();
        try {
            $data = [
                'currency_code' => $currencyName,
                'id_product' => $id,
                'price' => $price,
            ];
            $sql = ("UPDATE product SET price=:price, currency_code=:currency_code WHERE id_product=:id_product");
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
        } catch (PDOException $e) {
            echo "Nu se poate executa $sql" . $e->getMessage();
        }
    }

    public function getProductById(int $id)
    {
        $pdo = $this->connectDB();

        try {
            $data = [
                'id_product' => $id,
            ];
            $sql = ("SELECT * FROM product WHERE id_product=:id_product");
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Nu se poate executa $sql" . $e->getMessage();
        }
    }
}
;

