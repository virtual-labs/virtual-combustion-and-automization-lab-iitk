
/******************************************
* Ajax load XML file script -- By Eddie Traversa (http://dhtmlnirvana.com/)
* Script featured on Dynamic Drive (http://www.dynamicdrive.com/)
* Keep this notice intact for use
******************************************/
   
   function ajaxLoader(url,id)
	{
		if (document.getElementById) {
			var x = (window.ActiveXObject) ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
			}
			if (x)
				{
			x.onreadystatechange = function()
					{
				if (x.readyState == 4 && x.status == 200)
						{
						el = document.getElementById(id);
						el.innerHTML = x.responseText;
					}
					}
				x.open("GET", url, true);
				x.send(null);
				}
	    }