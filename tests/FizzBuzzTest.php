<?php declare(strict_types=1);

// to run test ./vendor/bin/phpunit tests
require_once(dirname(dirname(__FILE__)) .'/private/FizzBuzz.php');

use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    protected $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_FizzBuzz_can_get_the_correct_number_of_fizzes(): void
    {
        $fizzBuzzArray = $this->fizzBuzz->run(1, 6);

        $fizzBuzzFilteredArray = array_filter($fizzBuzzArray, function ($item) {
            return str_contains($item, '- Fizz');
        });

        $this->assertEquals(6, count($fizzBuzzArray));
        $this->assertEquals(2, count($fizzBuzzFilteredArray));
    }

    public function test_FizzBuzz_can_get_the_correct_number_of_buzzes(): void
    {
        $fizzBuzzArray = $this->fizzBuzz->run(1, 10);

        $fizzBuzzFilteredArray = array_filter($fizzBuzzArray, function ($item) {
            return str_contains($item, '- Buzz');
        });

        $this->assertEquals(10, count($fizzBuzzArray));
        $this->assertEquals(2, count($fizzBuzzFilteredArray));
    }

    public function test_FizzBuzz_can_get_the_correct_number_of_fizzBuzzes(): void
    {
        $fizzBuzzArray = $this->fizzBuzz->run(1, 30);

        $fizzBuzzFilteredArray = array_filter($fizzBuzzArray, function ($item) {
            return str_contains($item, '- FizzBuzz');
        });

        $this->assertEquals(30, count($fizzBuzzArray));
        $this->assertEquals(2, count($fizzBuzzFilteredArray));
    }

    public function test_FizzBuzz_creates_the_correct_array_structure(): void
    {
        $fizzBuzzArray = $this->fizzBuzz->run(1, 15);

        $expectedFizzBuzzArray = [
            '1',
            '2',
            '3 - Fizz',
            '4',
            '5 - Buzz',
            '6 - Fizz',
            '7',
            '8',
            '9 - Fizz',
            '10 - Buzz',
            '11',
            '12 - Fizz',
            '13',
            '14',
            '15 - FizzBuzz',
        ];

        $this->assertEquals($expectedFizzBuzzArray, $fizzBuzzArray);
    }
}
