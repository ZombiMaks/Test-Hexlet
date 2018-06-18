import square from './square';

import {getTriangleArea} from './main.js';

const solution = (n) => getTriangleArea(n, square(n) / 2);

export default solution;