<?php
    class FizzBuzz
    {
        public function run(int $fromNum = 1, int $toNum = 100): array
        {
            $fizzBuzzArray = [];
            for ($i=$fromNum; $i <= $toNum; $i++) {
                $fizzBuzzString = "$i";

                if ($i % 3 == 0 || $i % 5 == 0) {
                    $fizzBuzzString .= " - ";
                }
                
                if ($i % 3 == 0) {
                    $fizzBuzzString .= "Fizz";
                }
                
                if ($i % 5 == 0) {
                    $fizzBuzzString .= "Buzz";
                }

                $fizzBuzzArray[] = $fizzBuzzString;
            }
            return $fizzBuzzArray;
        }
    }
