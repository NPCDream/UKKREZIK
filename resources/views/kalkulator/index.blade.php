<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            background-color: yellow;
            border: 1px;
        }
        tr{
          width: 50px;
          padding: 15;
        }
        td{
            width: 50px;
            padding: 15;
        }
        input[type="submit"]{
            background-color: red;
            color: yellow;
        }
        input[type="reset"]{
            background-color: green;
            color: black;
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
    </style>
</head>
<body>
        <h1><center>Kalkulator Rezik</center></h1>
        <center>
            <form action="{{ Route('proses.store') }}" method="post">
                @csrf
                <table border="5" width=500>
                    <tr>
                        <td colspan="5"><input type="number" name="a" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="5"><input type="number" name="b" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="5">Hasil :</td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-success" value="tambahkan" name="op"></td>
                        <td><input type="submit" class="btn btn-warning" value="kurangkan" name="op"></td>
                        <td><input type="submit" class="btn btn-danger" value="kalikan" name="op"></td>
                        <td><input type="submit" class="btn btn-primary" value="bagikan" name="op"></td>
                        <td><input type="reset" class="btn btn-secondary" value="reset" name="op"></td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            VAREZIK NUR
                            <br>
                            XII PPLG 2
                        </td>
                    </tr>
                </table>
            </form>
        </center>
</body>
</html>
