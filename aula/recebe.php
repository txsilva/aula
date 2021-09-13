<?php
if(empty($_POST['nome'])){
	echo 'Nome está vazio.';
}else{
	echo $_POST['nome'];
}
if(empty($_POST['idade'])){
	echo 'Idade está vazia.';
}else{
	echo $_POST['idade'];
}
?>