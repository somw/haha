function loadXMLDoc(dname)
{
	if (window.XMLHttpRequest) {
		// IE7+,Firefox,Chrome,Opera,Safari 浏览器执行代码
		xhttp = new XMLHttpRequest();
	}
	else{
		// IE5,IE6 浏览器执行代码
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET",dname,false);
	xhttp.send();
	return xhttp.responseXML;
}