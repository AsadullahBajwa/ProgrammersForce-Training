<?php

// creating class for calcualator
class Calculator {
    public function add($val1, $val2) {
        return $val1 + $val2;
    }

    public function subtract($val1, $val2) {
        return $val1 - $val2;
    }

    public function multiply($val1, $val2) {
        return $val1 * $val2;
    }

    public function divide($val1, $val2) {
        if ($val2 != 0) {
            return $val1 / $val2;
        } else {
            return "Cannot divide by zero";
        }
    }
}

// making object of calculator class
$calculator = new Calculator();

$result = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $val1 = $_POST["val1"];
    $val2 = $_POST["val2"];
    $operation = $_POST["operation"];

    // callinf functions according to the given operation
    switch ($operation) {
        case "+":
            $result = $calculator->add($val1, $val2);
            break;
        case "-":
            $result = $calculator->subtract($val1, $val2);
            break;
        case "*":
            $result = $calculator->multiply($val1, $val2);
            break;
        case "/":
            $result = $calculator->divide($val1, $val2);
            break;
        case "clr":
            $result="";
            break;    
        default:
            $result = "Invalid operation";
            break;
    }
}
?>


<body>
    <h2>CALCULATOR</h2>
    <form method="post" action="">
        <label for="val1">First Value: </label>
        <input type="number" name="val1" placeholder="Number 1"> <br><br>
        <label for="val2">Second Value: </label>
        <input type="number" name="val2" placeholder="Number 2"><br><br>
        <button type="submit" name="operation" value="+">Add</button>
        <button type="submit" name="operation" value="-">Subtract</button>
        <button type="submit" name="operation" value="*">Multiply</button>
        <button type="submit" name="operation" value="/">Divide</button>
        <button type="submit" name="operation" value="clr">Clear</button>
    </form>
    <label for="result">RESULT: </label>
    <input type="text" value="<?php echo $result;?>">

</body>
