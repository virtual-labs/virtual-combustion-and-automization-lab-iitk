<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<SCRIPT language="JavaScript"  type="text/javascript">
/*
Animate your text - Script
Visit http://rainbow.arch.scriptmania.com/scripts/
 for this script and many more
*/
        var ie4 = false;
        if(document.all) {
                ie4 = true; 
        }       
        function setContent(name, value) {
                var d;  
                if (ie4) { 
                        d = document.all[name];
                } else {
                        d = document.getElementById(name);
                }       
                d.innerHTML = value;    
        }       

	function getContent(name) {
		var d;
                if (ie4) {
                        d = document.all[name];
                } else {
                        d = document.getElementById(name);
                }
                return d.innerHTML;
	}

        function setColor(name, value) {
                var d;  
                if (ie4) { 
                        d = document.all[name];
                } else {
                        d = document.getElementById(name);
                }
                d.style.color = value;  
        }

	function getColor(name) {
                var d;
                if (ie4) {
                        d = document.all[name];
                } else {
                        d = document.getElementById(name);
                }
                return d.style.color;
        }

        function animate(name, col) {
		var value = getContent(name);
		if (value.indexOf('<span') >= 0) { return; }
		var length = 0;
                var str = '';
		var ch;
		var token = '';
		var htmltag = false;	
                for (i = 0; i < value.length; i++) {
			ch = value.substring(i, i+1);
			if (i < value.length - 1) { nextch = value.substring(i+1, i+2); } else { nextch = ' '; }
			token += ch;
			if (ch == '<' && '/aAbBpPhHiIoOuUlLtT'.indexOf(nextch) >= 0) { htmltag = true; }
			if (ch == '>' && htmltag) { htmltag = false; }
			if (!htmltag && ch.charCodeAt(0) > 30 && ch != ' ' && ch != '\n') {		
                        	str += '<span id="' + name + '_' + length + '">' + token + '</span>';
				token = '';
				length++;
			}
                }
                setContent(name, str);
                command = 'animateloop(\'' + name + '\', ' + length + ', 0, 1, \'' + col + '\')';
                setTimeout(command , 100);
        }

        function animateloop(name, length, ind, delta, col) {
		var next = ind + delta;
		if (next >= length) { delta = delta * -1; next = ind + delta; }
		if (next < 0) { delta = delta * -1; next = ind + delta; }
                setColor(name + '_' + ind, getColor(name + '_' + next));
                setColor(name + '_' + next, col);
                command = 'animateloop(\'' + name + '\', ' + length + ', ' + next + ', ' + delta + ', \'' + col + '\')';
                setTimeout(command , 100);
        }
</SCRIPT>

</head>

<body>

<!-- Insert this into the <BODY> of your HTML  -->
<!-- Copy and paste it where you wish it to appear.-->
<!-- Alter message and color to taste.-->

<SPAN ID="animate"><B>Text you want to animate</B></SPAN>
<SCRIPT language="JavaScript">
animate('animate', '#ff8000');
</SCRIPT>
<p><font face="arial" size="-2">Javascripts provided</font><br><font face="arial, helvetica" size="-2"> by <a href="http://rainbow.arch.scriptmania.com/scripts/">Rainbow Arch</a></font></p>

</body>
</html>
