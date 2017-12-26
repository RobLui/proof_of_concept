  
  // FUNCTIE 1
  function TestFunctionOne() {
    a = 3;
    b = 2;
    result = a * b;
    return result;
  }
  
  // REPEAT FUNCTION 1
  function TestFunctionTwo() {
    c = 3;
    d = 2;
    result = c * d;
    return result;
  }
  
  // REPEAT FUNCTION 2
  function TestFunctionThree() {
    var e = 3;
    var f = 2;
    var result = e * f;
    return result;
  }
  
  function SumOfAll() {
    a = this.TestFunctionOne();
    b = this.TestFunctionTwo();
    c = this.TestFunctionThree();
    return a + b + c; 
  }
  
  var f = this.SumOfAll();
  
  console.log(f);
  
  console.log(TestFunctionOne());
  console.log(TestFunctionTwo());
  console.log(TestFunctionThree());



