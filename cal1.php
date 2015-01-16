
<?php
/////////////////////////////
//Created by Skull-boy 2014//
/////////////////////////////
?>
<html>
<body>
<form method="get" action="calc2.php">
    <label>Enter first number</label> <input type="number" name="numb1" /> <br />
    <label>Enter second number</label> <input type="number" name="numb2" /> <br />
    <label>Choose an action to do:</label>
    <select name="action">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select><br/>
    <input type="submit" value="Calculate"/>
</form>
</body>
</html>