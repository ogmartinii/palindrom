<?php

declare(strict_types=1);

namespace Palindrom;

class Palindrom
{

	/**
	 * @var string
	 */
	public $palindromCheck = '';


	public function isPalindrom(string $string)
	{
		for ($i = strlen($string) - 1; $i >= 0; $i--) {
			$this->palindromCheck .= $string[$i];
		}

		echo ($string === $this->palindromCheck)
			? sprintf('%s is palindrom', $string)
			: sprintf('%s is not palindrom', $string);
	}
}
