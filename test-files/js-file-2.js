  
  // FUNCTIE 1
  function TestFunctionOne() {
    var a = 3;
    var b = 2;
    var result = a * b;
    return result;
  }
  
  // REPEAT FUNCTION 1
  function TestFunctionTwo() {
    var c = 3;
    var d = 2;
    var result = c * d;
    return result;
  }
  
  // REPEAT FUNCTION 2
  function TestFunctionThree() {
    var e = 3;
    var f = 2;
    var result = e * f;
    return result;
  }
  
  // SUM OF ALL
  function SumOfAll() {
    var a = this.TestFunctionOne();
    var b = this.TestFunctionTwo();
    var c = this.TestFunctionThree();
    return a + b + c; 
  }
  
  var f = this.SumOfAll();
  
  console.log("TestFunctionOne = " + TestFunctionOne());
  console.log("TestFunctionTwo = " + TestFunctionTwo());
  console.log("TestFunctionThree = " + TestFunctionThree());
  console.log(f);



