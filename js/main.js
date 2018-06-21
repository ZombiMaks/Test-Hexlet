/*
Реализуйте и экспортируйте по умолчанию функцию addDigits, которая работает следующим образом:
Дано неотрицательное целое число num. Складывать все входящие в него цифры до тех пор, пока не останется одна цифра.
Для числа 38 процесс будет выглядеть так:

    3 + 8 = 11
    1 + 1 = 2

Результат: 2
*/

const addDigits = (num) => {
  let suma = String(num);
  while (suma.length > 1){
    let sum = 0;
    for (let i = 0; i < suma.length; i++){
       sum += Number(suma[i]);
    }
    suma = String(sum);
  }
  return Number(suma);
}

//export default addDigits;

console.log(addDigits(19)); // 1
/*
expect(addDigits(0)).toBe(0);
expect(addDigits(5)).toBe(5);
expect(addDigits(10)).toBe(1);
expect(addDigits(19)).toBe(1);
expect(addDigits(38)).toBe(2);
expect(addDigits(1259)).toBe(8);
expect(addDigits(598997686567)).toBe(4);
expect(addDigits(999999999999)).toBe(9);
*/