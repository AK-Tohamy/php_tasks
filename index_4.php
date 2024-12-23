
<?php

class InvoiceItem
{

    private $id;
    private $desc;
    private $qty;
    private $unitPrice;


    public function __construct($id, $desc, $qty, $unitPrice)
    {
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getDesc()
    {
        return $this->desc;
    }


    public function getQty()
    {
        return $this->qty;
    }


    public function setQty($qty)
    {
        $this->qty = $qty;
    }


    public function getUnitPrice()
    {
        return $this->unitPrice;
    }


    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }


    public function getTotal()
    {
        return $this->unitPrice * $this->qty;
    }


    public function __toString()
    {
        return "InvoiceItem [id=" . $this->id . ", desc=" . $this->desc . ", qty=" . $this->qty . ", unitPrice=" . $this->unitPrice . "]";
    }
}


$item = new InvoiceItem("A001", "Product Description", 5, 10.0);


echo $item . "<br>";


echo "Total: " . $item->getTotal() . "<br>";


$item->setQty(10);
echo "Updated Item: " . $item . "<br>";


echo "Updated Total: " . $item->getTotal() . "<br>";
