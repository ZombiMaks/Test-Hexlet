
/*
Реализуйте и экспортируйте по умолчанию функцию reverseInt, которая переворачивает цифры в переданном числе и возвращает новое число.
*/

const identity = str => str;
const length = str => str.length;

function reverseInt(num){
  const str = String(num);
  let numRevers = '';
  if (str[0] === '-'){
      numRevers += str[0];
    }
  for (let i = length(str) - 1; i >= 0; i--){
    if (str[i] !== '-'){
      numRevers += str[i];
    }
  }
  return Number(numRevers);
}

export default reverseInt;

console.log(reverseInt(13)); // 31
console.log(reverseInt(-123)); // -321