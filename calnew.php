<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>calculator</title>
</head>
<body>
<form action ="calpracjoin.php" method="POST">
<header class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title"><center>Calculator</center></h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <form>
                        <label>number1</label>
                        <input type="text" name="number1" /><br />
                        <label>number2</label>
                        <input type="number2 " name="number2" />
                    </form>
                </div>
            </div>

                    <br/>

            <br/>
            <select name = "operation">
                <option value = "+">+</option>
                <option value = "-">-</option>
                <option value = "x">x</option>
                <option value = "/">/</option>
                <option value = "%">%(mod)</option>
            </select>
            <br/>
            <br/>
            <br/>
                    <button onclick="myFunction()">submit query</button>

                    <script>
                        function myFunction()
                        {
                            alert("No Alert");
                        }
                    </script>
                    <input type="reset" name="resetbutton" value=" RESET " />


</form>
                </form></div>

        </div>
</div>

    </div>

</header>
</form>
</body>
</html>