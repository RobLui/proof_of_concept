
// FUNCTIE READY FOR REUSING
function TestFunctionOne(a,b) {
  var result = a * b;
  console.log(result)
  return result;
}

function SumOfAll() {
  var a = TestFunctionOne(2,3);
  var b = TestFunctionOne(2,3);
  var c = TestFunctionOne(2,3);
  return a + b + c; 
}

var f = this.SumOfAll();
console.log(f);


