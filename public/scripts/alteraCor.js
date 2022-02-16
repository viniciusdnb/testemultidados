function alteraCor(c)
{
	var classAtt = c.attributes.class;
	var strClass = classAtt.value
	var arrayClass = strClass.split(" ");
	var classCor = arrayClass[1];
	
	var table = document.querySelector(".portlet");
	var classTableAtt = table.attributes.class;
	var strClassTable = classTableAtt.value;
	var arrayClassTable = strClassTable.split(" ");
	var classCorTable = arrayClassTable[2];
	
	if(classCor != classCorTable)
	{
		table.setAttribute("class", "portlet box " + classCor);
	}

	


}