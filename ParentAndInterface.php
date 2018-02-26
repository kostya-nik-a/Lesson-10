<?php
<<< TASK  Домашнее задание к лекции 3.2 «Наследование и интерфейсы»
1. Распишите своё понимание полиморфизма и наследования своими словами. Представьте, что вас спрашивают на собеседовании.

Наследование - это один из принципов ООП, основанный на придании новым объектам аналогичных свойст от другого объекта, с небольшими изменениями, без дублирования кода. Т.е. если есть один объект, то можно создать новый, второй, объект, взяв свойства и методы от первого объекта и добавить или изменить у второго объекта лишь часть, это позволяет избегать дублирование кода.
Полиморфизм - это третий принцип ООП, в котором используется принцип создания одного класса со свойствами/методами, который может быть примене к множесту объектов, но поведение их может быть изменено. 

2. Своими словами распишите отличие интерфейсов и абстрактных классов. В чём отличие? Когда лучше использовать одно, когда другое?

Абстрактные классы - это классы не имеющие реализации, могут содержать в себе методы, которые не имеют тела или реализации . У них нельзя создать объект абстрактного класса.
Интерфейс, в отличие от абстрактного класса, не может содержать поля и методы, имеющие реализацию – он описывает только чистый функционал в виде абстрактных методов, которые должны реализовать его наследники. Т.е. в теле интерфейса используются только методы, без их реализации и константы.

3. Для всех объектов, которые вы делали в прошлом ДЗ, придумайте, что могло бы быть суперклассом? (Необходимо написать код).

4. Создайте интерфейсы для всех объектов, которые у вас были, и имплементируйте их.
TASK

abstract class SuperClass {
	public $price;
	public $title;
	public $year;

	public function __construct($title, $price,$year) 
	{ 
		$this->title = $title;
		$this->price = $price;
		$this->year = $year;
	}

	public function getPrice()
		{
			return $this->price;
			echo "Цена";
		}

	public function getYear()
		{
			return $this->year;
			echo "Год создания: ";
		}

}

interface Production {

	public function CreateObject;
	public function GetTitle;
}


class ClassCars extends SuperClass implements Production {

	public $markCar;
	public $modelCar;
	public $enginePowerCar;
	public $doorCar;
	public $volumeCar;
	public $colorCar;
	public $priceCar;

	public function getMark() {
		echo 'Марка машины: '.$this->markCar.'<br>';
	}

	public function getModel() {
		echo 'Модель машины: '.$this->modelCar.'<br>';
	}
	public function getDoor() {
		echo 'Количество дверей машины: '.$this->doorCar.'<br>';
	}

	public function getColor() {
		echo 'Цвет машины: '.$this->colorCar.'<br>';
	}

	public function GetTitle {
		echo "Описание: ".$this->title;
	}

	public function CreateObject {
		echo "Создание машины".$this->year;
	}

} 

$objectCar1 = new ClassCars();
$objectCar2 = new ClassCars();

$objectCar1->title = "Машина";
$objectCar1->markCar = "Honda";
$objectCar1->modelCar = "CR_V";
$objectCar1->year = "2015";

echo $objectCar1->getMark();
echo $objectCar1->getModel().'<br>';

$objectCar2->doorCar = "5";
$objectCar2->colorCar = "Синий";

echo $objectCar2->getDoor();
echo $objectCar2->getColor().'<br>';


class ClassTVs extends SuperClass implements Production {

	public $modelTV;
	public $diagonalTV;
	public $typeScreenTV;
	public $screenResolutionCar;
	public $smartTV;
	public $connectorTV;
	public $priceTV;

	public function getPrice() {

	}
	
	public function getCharacteristics() {

	}

	public function CreateObject {
		echo "Создание телевизора: ".$this->year;
	}

	public function GetTitle {
		echo "Описание: ".$this->title;
	}
}

$objectTV1 = new ClassCars();
$objectTV2 = new ClassCars();

class ClassPens extends SuperClass implements Production {

	public $modelPen;
	public $typePen;
	public $materialPen;
	public $colorPen;
	public $inkColorPen;
	public $lineThicknessPen;
	public $priceTV;

	public function getPrice() {

	}
	
	public function getCharacteristics() {

	}

	public function CreateObject {
		echo "Создание ручки: ".$this->year;
	}

	public function GetTitle {
		echo "Описание: ".$this->title;
	}
}

$objectPen1 = new ClassCars();
$objectPen2 = new ClassCars();

class ClassDucks extends SuperClass implements Production {

	public $classDuck;
	public $kindDuck;
	public $habitatDuck;
	public $reproductionDuck;

	public function getPrice() {

	}
	
	public function getHabitat() {

	}

	public function CreateObject {
		echo "Рождение утки: ".$this->year;
	}

	public function GetTitle {
		echo "Описание: ".$this->title;
	}
}

$objectDuck1 = new ClassCars();
$objectDuck2 = new ClassCars();

class ClassProducts extends SuperClass implements Production {

	public $modelPdoduct;
	public $typeProduct;
	public $materialProduct;
	public $categoryProduct;
	public $priceProduct;

	public function getPrice() {

	}
	
	public function getCharacteristics() {

	}
	public function CreateObject {
		echo "Создание продукта: ".$this->year;
	}

	public function GetTitle {
		echo "Описание: ".$this->title;
	}
}

$objectProduct1 = new ClassCars();
$objectProduct2 = new ClassCars();

?>