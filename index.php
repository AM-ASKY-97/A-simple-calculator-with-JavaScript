<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate of Two numbers</title>
</head>

    <link rel="stylesheet" href="mystyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">

    
<body>

    <div class="container">

         <div class="header">
        <h1>Calculate of two numbers</h1>
    </div>

    <div class="main">

        <div class="table">

            <form action="" name="cal">
                <table>
                    <tr>
                        <td id="num2tr"><label for="" id="lbl">Enter First Number : </label></td>
                        <td id="numtr"><input type="text" name="txt1" id="num1" placeholder="Input Only Number"></td>
                    </tr>

                    <tr>

                    </tr>

                    <tr id="">
                        <td id="num2tr"><label for="" id="lbl">Enter Secound Number : </label></td>
                        <td id="numtr"><input type="text" name="txt2" id="num1" placeholder="Input Only Number"></td>
                    </tr>
                </table>

                <div class="button">

                    <div><button type="button" id="btn" onclick="Add()">+</button></div>
                    <div><button type="button" id="btn" onclick="Mul()">-</button></div>
                    <div><button type="button" id="btn" onclick="Div()">*</button></div>
                    <div><button type="button" id="btn" onclick="Mod()">/</button></div>
        
                </div>
        
                <div class="result">
        
                   <label for="" id="lbl">The Answer is : </label>
                   <input type="text" name="res" id="num1" class="ans" readonly placeholder="Your Answer">
        
                </div>

                <div class="reset">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div><button type="reset" id="bt" >Clear</button></div>
                </div>
            
            </form>
        </div>

        

    </div>


    <div class="footer">

        <h2>Copyright  A. mohammed Asky</h2>

    </div>

    </div>

</body>

<script>

    function Add()
    {
        var nu1, nu2, result;

        nu1 = Number (document.cal.txt1.value);
        nu2 = Number (document.cal.txt2.value);

        if (nu1 == '')
        {
            alert ("Please Enter First Number")
        }

        else if (nu2 == '')
        {
            alert ("Please Enter Secound Number")
        }

        else
        {
            result = nu1 + nu2;
             document.cal.res.value =result;
        }

    }

    function Mul()
    {
        var nu1, nu2, result;

        nu1 = Number (document.cal.txt1.value);
        nu2 = Number (document.cal.txt2.value);

        if (nu1 == '')
        {
            alert ("Please Enter First Number")
        }

        else if (nu2 == '')
        {
            alert ("Please Enter Secound Number")
        }

        else
        {
            result = nu1 - nu2;
            document.cal.res.value =result;
        }

    }

    function Div()
    {
        var nu1, nu2, result;

        nu1 = Number (document.cal.txt1.value);
        nu2 = Number (document.cal.txt2.value);

        if (nu1 == '')
        {
            alert ("Please Enter First Number")
        }

        else if (nu2 == '')
        {
            alert ("Please Enter Secound Number")
        }

        else
        {
            result = nu1 * nu2;
            document.cal.res.value =result;
        }

    }

    function Mod()
    {
        var nu1, nu2, result;

        nu1 = Number (document.cal.txt1.value);
        nu2 = Number (document.cal.txt2.value);

        if (nu1 == '')
        {
            alert ("Please Enter First Number")
        }

        else if (nu2 == '')
        {
            alert ("Please Enter Secound Number")
        }

        else
        {
            result = nu1 / nu2;
            document.cal.res.value =result;
        }

    }

</script>


</html>