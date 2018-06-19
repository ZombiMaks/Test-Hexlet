const length = str => str.length;
const toUpperCase = str => str.toUpperCase();

const bigLettersCount = (str) => {
  // BEGIN (write your solution here)
  let result = 0;
  let i = 0;
  while (i < length){
    if (str[i] === toUpperCase[i]){
      result += 1;
    }
  }
  return result;
  // END
};


const compare = (first, second) => {
  const firstCount = bigLettersCount(first);
  const secondCount = bigLettersCount(second);

  // BEGIN (write your solution here)
  if (firstCount > secondCount){
    return 1;
  }else if (firstCount < secondCount){
    return -1;
  }else{
    return 0;
  }
  // END
};

export const greaterThan = (first, second) =>
  compare(first, second) === 1;

export const lessThan = (first, second) =>
  compare(first, second) === -1;

export const isEqual = (first, second) =>
  compare(first, second) === 0;

greaterThan('AD', 'ad sd'); // true, сравнение на > (больше)
greaterThan('AD', '   Ad sd'); // false, сравнение на > (больше)
lessThan('ghe df', 'dfwe r D'); // true, сравнение на < (меньше)
isEqual('liSp', 'lisP'); // true
