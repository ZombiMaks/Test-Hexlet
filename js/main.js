
/*
Реализуйте и экспортируйте по умолчанию функцию, которая делает заглавной первую букву каждого слова в предложении.
*/

function solution(str) {
  let result = '';
  for (let i = 0; i < str.length; i++){
    if (str[i - 1] == ' ' || str[i] == str[0] && str[i] != ' ' ){
      result += str[i].toUpperCase();
      //console.log(str[i]);
    }else{
      result += str[i];
    }
  }
  return result;
}

console.log(solution(' hello, world!')); // Hello, World!