<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulario de Cadastro
        </title>
        <script>
            function Teste1(){
                document.form1.action = "trabarquivo.php";
            }
            function Teste2(){
                document.form1.action = "trablistar.php";
            }
        </script>
    </head>
    <body>
        <div align="center">
            <form name="form1" method="POST">
                Codigo do cliente: <br><input type="text" name="listadecodigos"><br>
                Arquivo: <br><input type="text" name="past_arquivo"><br>
                Area de texto: <br><Textarea name="text" rows="10" cols="90" maxlength="500"></Textarea>
                <br>
                <input type="submit" name="Submit" value="Arquivar" OnClick="Teste1();">
                <input type="submit" name="Submit2" value="Listar" OnClick="Teste2();">
            </form>
        </div>
    </body>
</html>