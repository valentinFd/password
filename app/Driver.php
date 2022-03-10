<?php

namespace App;

use App\Program;

class Driver
{
    public function start(int $N, int $K): void
    {
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
