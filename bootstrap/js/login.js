function cancelBtn(){
	if(confirm("Deseja realmente cancelar? Você será redirecionado à página inicial.")){ //Se confirmar cancelar o cadastro
		window.location.assign("../index.php");
	}
}