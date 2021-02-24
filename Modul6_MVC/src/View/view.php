<?php

namespace View;

include_once 'Model/model.php';
include_once 'Help/help.php';
use Help\Help;
use Model\Model;

// verificarile xss ...

class View
{
    public $model;
    // constructor (model)
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    // showTable {getInfo din model}
    // foreach prin getInfo pentru afisare
    public function showTable()
    {
        echo '<table>';
        echo '<th>id_product</th>';
        echo '<th>nume</th>';
        echo '<th>quantity</th>';
        echo '<th>vat</th>';
        echo '<th>price</th>';
        echo '<th>currency_code</th>';
        $tableProduct = $this->model->getInfo();
        foreach ($tableProduct as $product) {
            echo "<tr><td>" . $product['id_product'] . "</td><td>" .
                $product['nume'] . "</td><td>" .
                $product['quantity'] . "</td><td>" .
                $product['vat'] . "</td><td>" .
                $product['price'] . "</td><td>" .
                $product['currency_code'] . "</td></tr>";

        }
        echo '</table>';
    }
    public function showForm()
    {
        echo sprintf('<form action="%s" method="%s">', $_SERVER['PHP_SELF'], 'post');
        if (isset($_POST['number'])) {
            Help::textInput($POST_['number']);
        }
        echo '<label for="id">Id produsului </label>';
        echo '<input type= "number" name="id_product"><br>';
        echo '<label for="currency">Selecteaza currency </label>';
        echo '<select name="currency_code" id="currency">';
        echo '<option value="EUR">EUR</option>';
        echo '<option value="USD">USD</option>';
        echo '<option value="GBP">GBP</option>';
        echo '</select><br>';
        echo '<input type="submit" value="Submit" name="submit">';
        echo '</form>';

    }
}

// metoda afisare formular(action='$_SERVER['PHP_SELF']')
