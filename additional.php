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
	public $delivery;

    public function __construct($title, $category, $price, $weight)
    {
            $this->title = $title;
            $this->category = $category;
            $this->price = $price;
            $this->weight = $weight;
            echo "Продукт:  $this->title";
    } 

	trait getProductPrice //стандартная стоимость продукта
	{
		public function getPrice() 
		{
			echo "Цена: {t$this->price} руб."
		}
	}

	trait getProductDiscount // стоимость продукта со скидкой
	{
		public function getDiscountPrice($discount)
		{	
			if ($this->weight > 10) {
				if ($discount) {
					$this->priceDisc = round($price - ($price * $discount / 100));
					echo "Цена со скидкой: {$this->priceDisc} руб. Скидка: $this->$discount";
				} 
				else {
					return $price;
					echo "Цена товара без скидки: {$this->price} руб."
				}
			}
			else {
				
			}
		}
	}

	trait getDelivery // стоимость доставки
	{
		public function getDeliveryPrice
		{
			if ($this->discount == 0) {
            	$this->delivery = 250;
            } 
            else {
            	$this->delivery = 300;
            }
            echo "Стоимость доставки: {$this->delivery} руб. ";
		}
	}


}

class ComputerClass {

}

class SmartfonClass {

}

class TVClass {

}
