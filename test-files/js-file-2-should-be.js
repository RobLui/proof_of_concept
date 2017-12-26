
// FUNCTIE READY FOR REUSING
function TestFunctionOne(a,b) {
  result = a * b;
  console.log(result)
  return result;
}
// SUM OF ALL
function SumOfAll() {
  a = TestFunctionOne(2,3);
  b = TestFunctionOne(2,3);
  c = TestFunctionOne(2,3);
  result = a + b + c;
  console.log(result);
  return result;
}

this.SumOfAll();