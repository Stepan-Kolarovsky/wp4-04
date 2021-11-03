<?php
class Bagetomat
{
    private int $productCount;
    private int $productPrice;
    private int $insertedCoins;
    private int $returnCoins;
    private int $bank;

    public function __construct(int $productCount, int $productPrice, int $returnCoins) {
        $this->productCount = $productCount;
        $this->productPrice = $productPrice;
        $this->returnCoins = $returnCoins;
        $this->insertedCoins = 0;
        $this->bank = 0;
    }    

    public function getProductCount() {
        return $this->productCount;
    }

    public function getProductPrice() {
        return $this->productPrice;
    }

    public function getReturnCoins() {
        return $this->returnCoins;
    }

    public function insertCoin(int $count)
    {
        $this->insertedCoins += $count;
    }

    public function makeOrder()
    {
        if ($this->insertedCoins < $this->productPrice) {
            throw new Exception("Bylo vloženo málo peněz");
        }
        $this->productCount-- ;
        $this->insertedCoins -= $this->productPrice;
        $this->returnCoins = $this->insertedCoins;
        $this->bank += $this->productPrice;
    }
}