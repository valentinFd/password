<?php

namespace App;

class Program
{
    public function numbers(int $N): array
    {
        return range(1, $N);
    }

    public function primeNumbers(array $numbers): array
    {
        $result = [];
        foreach ($numbers as $number)
        {
            if ($number < 2) continue;
            $isPrime = true;
            for ($i = 2; $i <= $number / 2; $i++)
            {
                if ($number % $i === 0)
                {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) $result[] = $number;
        }
        return $result;
    }

    public function palindromes(array $numbers): array
    {
        $result = [];
        foreach ($numbers as $number)
        {
            $number = (string)$number;
            $isPalindrome = true;
            for ($i = 0; $i < strlen($number) / 2; $i++)
            {
                if ($number[$i] !== $number[strlen($number) - 1 - $i])
                {
                    $isPalindrome = false;
                    break;
                }
            }
            if ($isPalindrome) $result[] = (int)$number;
        }
        return $result;
    }

    public function randomPassword(array $numbers, int $K): string
    {
        $length = random_int(3, $K);
        $result = '';
        while ($length !== 0 && $numbers)
        {
            $newNumbers = array_filter($numbers, function ($n) use ($length)
            {
                return strlen($n) <= $length;
            });
            $key = random_int(0, count($newNumbers) - 1);
            $result .= $newNumbers[$key];
            $length -= strlen($newNumbers[$key]);
        }
        return $result;
    }
}
