<?php
$past_name = $_POST["listadecodigos"];//nome de pasta
$diretorio = '/'; //diretorio
$arquivoname = $_POST["past_arquivo"];//nome do arquivo
$text= $_POST["text"];//seleciona o textarea
//verifica a existencia do diretorio
if (is_dir("$past_name")){
    echo "Diretorio existente"."</BR>";
    //verifica existencia do arquivo
    if (file_exists("$past_name.$diretorio.$arquivoname.txt")){
        echo "Arquivo existente"."</BR>";
        $myfile = fopen("$past_name.$diretorio.$arquivoename.txt","a+");//criacao de um arquivo para o ponteiro no final
        fwrite($myfile,$text."\r\n");//escreve no arquivo .txt
        fclose($myfile);//fechamemto do arquivo
    }
    else{
        echo "Arquivo nao existente"."</BR>";
        //cria um arquivo
        $myfile = fopen("$arquivoname.txt",'w+');
        fwrite($myfile,$text);
        fclose($myfile);
    }
}
else{
    echo "Diretorio Não existente" . "<br>";
    if(mkdir($past_name)){
        echo "Diretorio criado com sucesso!!!"."<br>";
        $filename = fopen("$past_name.$diretorio.$arquivoname.txt","w+");
        fwrite($arquivoname,$text);
        fclose($arquivoname);
        echo "Arquivo criado"."</BR>";
    }
}
?>