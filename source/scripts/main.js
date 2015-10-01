function validate(){
	var quantidade = document.getElementById("qntd").value;
	var valor = document.getElementById("valor").value;
	var desconto = document.getElementById("desconto").value;
	var valorPromocional = document.getElementById("valorPromocional").value;
	var nomeProduto = document.getElementById("nomeProduto").value;
	var descricao = document.getElementById("descricao").value;
	
	var validation = true;
	
	//Quantidade
	if(quantidade == ""){
		validation == false;
		alert("Preencha a quantidade mínima!");
	}else if(isNaN(quantidade)){
		validation == false;
		alert("Digite somente números!");
	}
	
	//Valor
	if(valor == ""){
		validation == false;
		alert("Preencha o valor do produto!");
	}else if(isNaN(valor)){
		validation == false;
		alert("Digite somente números!");
	}
	
	//Desconto
	if(desconto == ""){
		validation == false;
		alert("Preencha o valor do desconto!");
	}else if(isNaN(desconto)){
		validation == false;
		alert("Digite somente números!");
	}
	
	//Valor Promocional
	if(valorPromocional == ""){
		validation == false;
		alert("Preencha o valor promocional!");
	}else if(isNaN(valorPromocional)){
		validation == false;
		alert("Digite somente números!");
	}
	
	//Nome Prduto
	if(nomeProduto == ""){
		validation == false;
		alert("Digite o nome do produto!");
	}else if(!isNaN(nomeProduto)){
		validation == false;
		alert("Digite somente caracteres!");
	}
	//Descricao
	if(descricao == ""){
		validation == false;
		alert("Digite o nome do produto!");
	}else if(!isNaN(descricao)){
		validation == false;
		alert("Digite somente caracteres!");
	}
	
}

