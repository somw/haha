function loadXMLDoc(dname)
{
	if (window.XMLHttpRequest) {
		// IE7+,Firefox,Chrome,Opera,Safari �����ִ�д���
		xhttp = new XMLHttpRequest();
	}
	else{
		// IE5,IE6 �����ִ�д���
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET",dname,false);
	xhttp.send();
	return xhttp.responseXML;
}