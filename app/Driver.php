<?php

namespace App;

use App\Program;

class Driver
{
    public function start(): void
    {
        do
        {
            $N = (int)readline('Enter N: ');
            if ($N < 1) echo 'N must be greater than 0' . PHP_EOL;
        } while ($N < 1);
        do
        {
            $K = (int)readline('Enter K: ');
            if ($K < 3) echo 'K must be greater than 2' . PHP_EOL;
        } while ($K < 3);

        $program = new Program();

        $numbers = $program->numbers($N);
        echo 'Numbers: ';
        $this->print($numbers);

        $primeNumbers = $program->primeNumbers($numbers);
        echo 'Prime numbers: ';
        $this->print($primeNumbers);

        $palindromes = $program->palindromes($numbers);
        echo 'Palindromes: ';
        $this->print($palindromes);

        $password = $program->randomPassword($primeNumbers, $K);
        echo 'Password: ' . $password;
    }

    private function print(array $numbers): void
    {
        foreach ($numbers as $number)
        {
            echo $number . ' ';
        }
        echo PHP_EOL;
    }
}
