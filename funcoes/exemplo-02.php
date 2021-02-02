<?php 


function salario() {
	return 946.00;
}

echo "José recebeu 3 salarios: ".(number_format(salario()*3, 2, ',', '.'));