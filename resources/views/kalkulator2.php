
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
            background-color: green;
            outline: 1px solid rgb(99, 56, 56);
        }

        td {
            width: 50px;
            padding: 15px;
        }

        tr {
            width: 50px;
            padding: 15px;
        }

        input[type="button"] {
            width: 100%;
            padding: 10px 20px;
            background-color: rgb(0, 0, 0);
            color: red;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: large;
            box-shadow: 5px 5px 5px rgba(rgb(255, 255, 255), rgb(0, 0, 0), rgb(0, 0, 0), alpha);
        }

        input[type="text"] {
            width: 30%;
            padding: 10px 20px;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
            border-radius: 5px;
            border: 1px solid black;
            align-items: center;
            outline: 1px solid black;
            box-shadow: 5px 5px 5px rgba(red, green, blue, alpha);
        }

        input[type="button"]:hover {
            background-color: yellow;
        }
    </style>

</head>

<body>
    <center>
        <h1>KALKULATOR REZIK</h1>
    </center>
    <center>
            <form name="form1" action="" method="post">
                <center><input type="text" name="txt1" id=""><br></center>
                <center>
                    <table border=1 width=450 height=200>
                </center><br>
                <tr>
                    <td><input type="button" value="1" onClick="form1.txt1.value+='1'"></td>
                    <td><input type="button" value="2" onClick="form1.txt1.value+='2'"></td>
                    <td><input type="button" value="3" onClick="form1.txt1.value+='3'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="4" onClick="form1.txt1.value+='4'"></td>
                    <td><input type="button" value="5" onClick="form1.txt1.value+='5'"></td>
                    <td><input type="button" value="6" onClick="form1.txt1.value+='6'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="7" onClick="form1.txt1.value+='7'"></td>
                    <td><input type="button" value="8" onClick="form1.txt1.value+='8'"></td>
                    <td><input type="button" value="9" onClick="form1.txt1.value+='9'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="C" onClick="form1.txt1.value=''"></td>
                    <td><input type="button" value="0" onClick="form1.txt1.value+='0'"></td>
                    <td><input type="button" value="+" onClick="form1.txt1.value+='+'"></td>
                </tr>
                <tr>
                    <td><input type="button" value="-" onClick="form1.txt1.value+='-'"></td>
                    <td><input type="button" value="x" onClick="form1.txt1.value+='*'"></td>
                    <td><input type="button" value="/" onClick="form1.txt1.value+='/'"></td>
                <tr>
                    <td colspan="3"><input type="button" value="=" onClick="form1.txt1.value=eval(form1.txt1.value)"></td>
                </tr>
                <tr>
                    <td colspan="4">
                        Nama:Varezik Nur
                        <br>
                        Kelas:XII PPLG 2
                    </td>
                </tr>
                </table>
            </form>
    </center>
</body>

</html>
