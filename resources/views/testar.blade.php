<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<button onclick="alteraDiv()" id="botao">Altera o conteudo da div abaixo</button>

<div id="exemplo">

</div>

<script src="{{URL::asset('js/jquery.js')}}" ></script>
<script>
    function alteraDiv(){

        var url,data;
        url = "/testar";
        data = {nome:"Eunice",nome2:"Deize"};
        $.post(url,data,function(data,status){
            var array,txtHtml;


            array = JSON.parse(data);
            txtHtml = "<p>"+array[0]+"  "+array[1]+"</p>";
            $("#exemplo").html(txtHtml);
        });
    }
</script>
</body>
</html>