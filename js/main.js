
/*
Реализуйте и экспортируйте по умолчанию функцию invertCase, которая меняет в строке регистр каждой буквы на противоположный.
*/

const length = str => str.length;
const toUpperCase = str => str.toUpperCase();
const toLowerCase = str => str.toLowerCase();

const invertCase = (str) => {
  let differentReg = '';
  for (let i = 0; i < length(str); i++){
    if (str[i] ===  toUpperCase(str[i])){
      differentReg += toLowerCase(str[i]);
    }else{
    differentReg += toUpperCase(str[i]);
    }
  }
  return differentReg;
}

//export default invertCase;

console.log(invertCase('Hello, World!')); // hELLO, wORLD!
console.log(invertCase('I loVe JS')); // i LOvE js