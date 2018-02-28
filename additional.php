<!-- 
Дополнительное задание:
1. Создайте базовый класс продукта по аналогии с рассмотренным в примерах.
2. Создайте три любых типа продукта (класса), отличных от приведенных в лекции в разных категориях.
3. Все продукты, кроме одного, имеют 10-процентную скидку и их цена должна выводиться с ней.
4. Один тип продукта имеет скидку только в том случае, если его вес больше 10 килограмм.
5. Доставка на все продукты = 250 рублей, но если на продукт была скидка, то 300 рублей.
6. Используйте примеси, интерфейсы или абстрактные классы в решении задачи.
-->

<?php
class BaseProductClass {
	public $title;
	public $category;
	public $description;
	public $weight;
	public $price;
	public $discount;
	public $delivery;

    public function __construct($title, $category, $price, $weight)
    {
            $this->title = $title;
            $this->category = $category;
            $this->price = $price;
            $this->weight = $weight;
            echo "Продукт:  $this->title";
    } 
}

	trait getProductPrice //стандартная стоимость продукта
	{
		public function getPrice() 
		{
			echo "<br>Стоимость товара: {$this->price} руб.";
		}
	}

	trait getProductDiscount // стоимость продукта со скидкой
	{
		public function getDiscountPrice()
		{	
			$this->discount = 10;
			$this->priceDisc = round(($this->price - $this->price * $this->discount / 100),2);
			echo "<br>Стоимость товара со скидкой: {$this->priceDisc} руб. Скидка: {$this->discount}%";
		}
	}

	trait getWeightDiscount // стоимость продукта со скидкой
	{
		public function getWeightDiscount()
		{	
			if ($this->weight > 10) {
				$this->discount = 10;
				$this->priceDisc = round($this->price - ($this->price * $this->discount / 100));
				echo "<br>Стоимость товара со скидкой: {$this->priceDisc} руб. Скидка: {$this->discount}%";
			} 
			else {
				$discount = 0;
				echo "<br>Стоимость товара без скидки: {$this->price} руб.";
			}
		}
	}

	trait getDelivery // стоимость доставки
	{
		public function getDeliveryPrice()
		{
			if ($this->discount == 0) {
            	$this->delivery = 250;
            } 
            else {
            	$this->delivery = 300;
            }
            echo "<br>Стоимость доставки: {$this->delivery} руб. ";
		}
	}


class ComputerClass extends BaseProductClass {
	use getProductDiscount, getDelivery;
}

$sysBlock = new ComputerClass("Системный блок", "Компьютеры", 30000, 3);
echo $sysBlock->getDiscountPrice();
echo $sysBlock->getDeliveryPrice()."<br><hr>";

class SmartfonClass extends BaseProductClass {
	use getProductPrice, getDelivery;
}

$smartFon = new SmartfonClass("Смартфон", "Смартфон", 60000, 0.150);
echo $smartFon->getPrice();
echo $smartFon->getDeliveryPrice()."<br><hr>";

class FridgeClass extends BaseProductClass {
	use getProductDiscount,getDelivery,getWeightDiscount;
}

$Fridge = new FridgeClass("Холодильник", "Бытовая техника", 20000, 16);
echo $Fridge->getWeightDiscount();
echo $Fridge->getDeliveryPrice()."<br><hr>";

?>