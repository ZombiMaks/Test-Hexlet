
const square = ($num) => $num * $num;
// возвращает сумму квадратов двух чисел
const sumOfSquares = ($num, $num2) => square($num) + square($num2);
// возвращает квадрат суммы квадратов двух чисел
const squareSumOfSquares = ($num, $num2) => square(sumOfSquares($num, $num2));

console.log(square(5)); // 25)
console.log(square(10)); // 100
console.log(sumOfSquares(5, 10)); // 125
console.log(sumOfSquares(10, -9)); // 181
console.log(squareSumOfSquares(1, 1)); // 4
console.log(squareSumOfSquares(2, 3)); // 169