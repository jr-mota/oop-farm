<?php

namespace App\Animals;

abstract class Animal {
	// Уникальный номер каждого животного
	protected int $uniqueNumber;
	// Название генерируемого продукта
	protected string $productName;
	// Минимальное кол-во продукта
	protected int $min;
	// Максимальное кол-во продукта
	protected int $max;

	public function getUniqueNumber() :int {
		return $this->uniqueNumber;
	}

	public function genProduct() :int {
		return mt_rand($this->min, $this->max);
	}

	public function getProductName() :string {
		return $this->productName;
	}

	public function changeUniqueNumber(int $num) {
		$this->uniqueNumber = $num;
	}
};