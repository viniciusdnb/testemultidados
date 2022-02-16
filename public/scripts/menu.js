function menu(menu) {

	var cadastro = document.querySelector("#menujs" + menu);
	var att = cadastro.attributes;
	var c = att.class;
	var str = c.value;



	if (str.match(/active/) == null) {
		cadastro.setAttribute("class", "sub-menu active");
	}
	else {
		cadastro.setAttribute("class", "sub-menu");
	}


	menuServer(menu);

}
function menuServer(menu) {

	const xmlhttp = new XMLHttpRequest;
	xmlhttp.open("GET", "home/optionMenu" + menu);
	xmlhttp.onload = function () {
		//cria Json com os dados vindo do servidor
		const arrayMenu = JSON.parse(this.responseText);

		//ordena em ordem alfabetica os elemntso do Json
		arrayMenu.sort();
		var li = "";

		for (let i = 0; i < arrayMenu.length; i++) {

			li += '<li><a href="#">' + arrayMenu[i] + "</a></li>";
		}

		document.getElementById("menujs" + menu).innerHTML = li;
	}
	xmlhttp.send();
}