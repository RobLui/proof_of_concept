function TestFunctionOne() {
  a = 3;
  b = 2;
  result = a * b;
  console.log(result);
  return result;
}
function TestFunctionTwo() {
  c = 3;
  d = 2;
  result = c * d;
  console.log(result);
  return result;
}
function TestFunctionThree() {
  e = 3;
  f = 2;
  result = e * f;
  console.log(result);
  return result;
}
function SumOfAll() {
  a = TestFunctionOne();
  b = TestFunctionTwo();
  c = TestFunctionThree();
  result = a + b + c;
  console.log(result + '\n ');
  return result;
}
SumOfAll();
// TOTAL = 30 LINES OF CODE