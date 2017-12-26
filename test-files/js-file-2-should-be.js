function TestFunctionOne(a,b) {
  result = a * b;
  console.log(result)
  return result;
}
function SumOfAll() {
  a = TestFunctionOne(2,3);
  b = TestFunctionOne(2,3);
  c = TestFunctionOne(2,3);
  result = a + b + c;
  console.log(result + '\n ');
  return result;
}
SumOfAll();
// TOTAL = 14 LINES OF CODE