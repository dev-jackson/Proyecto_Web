function change(categoria, marca){
    categoria = document.getElementById(categoria);
    marca = document.getElementById(marca);
    marca.value ="";
    marca.innerHTML = "";
    if(categoria.value == "HAMBURGUEZAS"){
    var optionArray = ["TODOS|TODOS","CARL'S JR|CARL'S JR",
                              "MC DONALD'S|MC DONALD'S",
							  "BURGER KING|BURGER KING"
                              ];                              
    } else if(categoria.value == "PIZZAS"){
    var optionArray = ["TODOS|TODOS","DOMINO PIZZA|DOMINO PIZZA",
	                       "PIZZA HUT|PIZZA HUT",
						   "PAPA JHONS|PAPA JHONS",
                              ];                           
    } else if(categoria.value == "PARRILLADAS"){
    var optionArray = ["TODOS|TODOS","TABLITA DEL TARTARO|TABLITA DEL TARTARO",
	                       "PARRILLADA DEL ÑATO|PARILLADA DEL ÑATO",
						   "PARRILLADA DEL URU|PARILLADA DEL URU",
						 
                              ];
	} else if(categoria.value == "FARMACIAS"){
    var optionArray = ["TODOS|TODOS","FYBECA|FYBECA",
	                       "SANA SANA|SANA SANA",
						   "PHARMACY'S|PHARMACY'S",
						 
                              ];
    } else if(categoria.value == "GOURMET"){
    var optionArray = ["TODOS|TODOS","CASA DE JULIAN|CASA DE JULIAN",
	                       "RIOKO|RIOKO",
						   "LE GOURMET|LE GOURMET",
						  
                              ];							  
	
	 } else if(categoria.value == "SUPERMERCADOS"){
    var optionArray = ["TODOS|TODOS","MI COMISARIATO|MI COMISARIATO",
	                       "SUPERMAXI|SUPERMAXI",
						   "TIA S.A.|TIA S.A.",
						  
                              ];
    } else if(categoria.value == "LICORERIAS"){
    var optionArray = ["TODOS|TODOS","LICORERIA GYE|LICORERIA GYE",
	                       "ZONA FRIA PM|ZONA FRIA PM",
						   "LA GUARDA|LA GUARDA",
					
                              ];							  
	 } else if(categoria.value == "ELECTRODOMESTICOS"){
    var optionArray = ["TODOS|TODOS","LA GANGA|LA GANGA",
	                       "CREDITOS ECONOMICOS|CREDITOS ECONOMICOS",
						
						   "COMPUTRON|COMPUTRON",
                              ];	
	};

  for(option = 0;option < optionArray.length; option++){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    marca.options.add(newOption);
  };    
}