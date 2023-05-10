<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan04</title>
</head>
<body>
    <form>
        <div>
        masukkan alas :
        <input type="text" id="alas">
        masukan tinggi :
        <input type="text" id="tinggi">
        <button type="button" onclick="hasil()">OK</button>
        </div>
    </form>
    <script>
        function hasil(){
        let a= document.getElementById("alas").value;
        let t= document.getElementById("tinggi").value;
        let luas = 0.5*a*t;

        alert("hasil" +luas);
    }
    </script>
</body>
</html>