<?php
namespace Controller;

include_once 'Model/model.php';
use Model\Model;

class Controller
{
    public $post;
    public $model;
    public function __construct($post, Model $model)
    {
        $this->post = $post;
        $this->model = $model;
    }

    public function updateCurrency()
    {
        switch ($this->post['currency_code']) {
            case 'EUR':
                $productData = $this->model->getProductById($this->post['id_product']);
                if ($this->post['currency_code'] == 'EUR' && $productData['currency_code'] == 'USD') {
                    $pretNou = $this->eurtoUsd((float) $productData['price']); 
                    $this->model->updateCurrencyByProductId($this->post['id_product'], $this->post['currency_code'], $pretNou);
                } elseif ($this->post['currency_code'] == 'EUR' && $productData['currency_code'] == 'GBP') {
                    $pretNou = $this->eurtoGbp((float) $productData['price']);
                    $this->model->updateCurrencyByProductId($this->post['id_product'], $this->post['currency_code'], $pretNou);
                }
                break;
            case 'USD':
                $productData = $this->model->getProductById($this->post['id_product']);
                if ($this->post['currency_code'] == 'USD' && $productData['currency_code'] == 'EUR') {
                    $pretNou = $this->usdtoEur((float) $productData['price']);
                    $this->model->updateCurrencyByProductId($this->post['id_product'], $this->post['currency_code'], $pretNou);
                } elseif ($this->post['currency_code'] == 'USD' && $productData['currency_code'] == 'GBP') {
                    $pretNou = $this->usdtoGbp((float) $productData['price']);
                    $this->model->updateCurrencyByProductId($this->post['id_product'], $this->post['currency_code'], $pretNou);
                }
                break;
            case 'GBP':
                $productData = $this->model->getProductById($this->post['id_product']);
                if ($this->post['currency_code'] == 'GBP' && $productData['currency_code'] == 'EUR') {
                    $pretNou = $this->gbptoEur((float) $productData['price']);
                    $this->model->updateCurrencyByProductId($this->post['id_product'], $this->post['currency_code'], $pretNou);
                } elseif ($this->post['currency_code'] == 'GBP' && $productData['currency_code'] == 'USD') {
                    $pretNou = $this->gbptoUsd((float) $productData['price']);
                    $this->model->updateCurrencyByProductId($this->post['id_product'], $this->post['currency_code'], $pretNou);
                }
                break;
        }
    }

    private function eurtoUsd(float $pretCurent, float $raportEurUsd = 1.22): float
    {
        return $pretCurent * $raportEurUsd;
    }
    private function usdtoEur(float $pretCurent, float $raportUsdEur = 0.81): float
    {
        return $pretCurent * $raportUsdEur;
    }
    private function usdtoGbp(float $pretCurent, float $raportUsdGbp = 0.73): float
    {
        return $pretCurent * $raportUsdGbp;
    }
    private function gbptoUsd(float $pretCurent, float $raportGbpUsd = 1.35): float
    {
        return $pretCurent * $raportGbpUsd;
    }
    private function gbptoEur(float $pretCurent, float $raportGbpEur = 1.11): float
    {
        return $pretCurent * $raportGbpEur;
    }
    private function eurtoGbp(float $pretCurent, float $raportEurGbp = 0.90): float
    {
        return $pretCurent * $raportEurGbp;
    }

}
