<?php

namespace DesignPatterns\Behavioral\Observer\Orders;

final class Workshop implements Order
{
    public readonly string $createDate;
    public readonly string $type;
    public readonly string $buyer;
    public readonly string $price;
    public readonly string $paid;

    public function __construct(array $workShopDetails)
    {
        $this->type = $workShopDetails['type'];
        $this->buyer = $workShopDetails['buyer'];
        $this->price = $workShopDetails['price'];
        $this->paid = $workShopDetails['paid'];
        $this->createDate = $workShopDetails['createDate'];
    }
}