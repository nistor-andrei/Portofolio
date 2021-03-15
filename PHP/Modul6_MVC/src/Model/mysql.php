<?php
include_once 'connectDB.php';
use Model\ConnectDb;

class Database
{
    public static function connectDB()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'mvc';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'Conectat cu succes';
        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }
        $sql = "CREATE TABLE product ( id_product INT,nume VARCHAR(50),quantity INT,vat INT,price DECIMAL(5,2),currency_code VARCHAR(50))";
        $conn->exec($sql);
    }

    public $insert = "INSERT INTO product(id_product, nume , quantity, vat, price, currency_code) VALUES";

    public $val = [
        ['id_product' => 1,
            'nume' => "'American Realty Investors, Inc.'",
            'quantity' => 74,
            'vat' => 42,
            'price' => 19.43,
            'currency_code' => "'EUR'",
        ],
        ['id_product' => 2,
            'nume' => "'First Trust Switzerland AlphaDEX Fund'",
            'quantity' => 40,
            'vat' => 26,
            'price' => 88.13,
            'currency_code' => "'USD'",
        ],
        ['id_product' => 3,
            'nume' => "'American Vanguard Corporation'",
            'quantity' => 3,
            'vat' => 19,
            'price' => 89.03,
            'currency_code' => "'GBP'",
        ],
        ['id_product' => 4,
            'nume' => "'Editas Medicine, Inc.'",
            'quantity' => 5,
            'vat' => 4,
            'price' => 35.86,
            'currency_code' => "'USD'",
        ],
        ['id_product' => 5,
            'nume' => "'Hospitality Properties Trust'",
            'quantity' => 25,
            'vat' => 36,
            'price' => 42.18,
            'currency_code' => "'GBP'",
        ],
        ['id_product' => 6,
            'nume' => "'Modern Media Acquisition Corp.'",
            'quantity' => 26,
            'vat' => 78,
            'price' => 80.82,
            'currency_code' => "'EUR'",
        ],
        ['id_product' => 7,
            'nume' => "'T. Rowe Price Group, Inc.'",
            'quantity' => 29,
            'vat' => 4,
            'price' => 25.15,
            'currency_code' => "'USD'",
        ],
        ['id_product' => 8,
            'nume' => "'Walgreens Boots Alliance, Inc.'",
            'quantity' => 5,
            'vat' => 78,
            'price' => 48.85,
            'currency_code' => "'EUR'",
        ],
        ['id_product' => 9,
            'nume' => "'DHT Holdings, Inc.'",
            'quantity' => 33,
            'vat' => 100,
            'price' => 74.41,
            'currency_code' => "'GBP'",
        ],
        ['id_product' => 10,
            'nume' => "'Ambev S.A.'",
            'quantity' => 87,
            'vat' => 88,
            'price' => 22.79,
            'currency_code' => "'USD'",
        ],

    ];
    public function insertData()
    {
        foreach ($this->val as $value) {
            $valorii = implode(',', $value);
            $query = sprintf('%s (%s) ', $this->insert, $valorii);
            echo $query . "\n";

            $this->dbConn()->exec($query);
        }
    }
    private function dbConn()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'mvc';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo 'Conectat cu succes';
            return $conn;
        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }

    }
}

$ins = new Database;
$ins->insertData();
