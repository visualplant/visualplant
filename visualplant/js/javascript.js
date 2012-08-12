/* global js vars */
var img_path="/img";

function ltrim(s) { return s.replace( /^\s*/, "" ); }
function rtrim(s) { return s.replace( /\s*$/, "" ); }
function trim(s) { return rtrim(ltrim(s)); }
function putCursor(obj) { if(window.focus)obj.focus(); }
function putSelection(obj) { putCursor(obj); if(window.select)obj.select(); }
function setCursor(field,value) { if(field.value==value) { field.value=""; } }
function checkCursor(field,value) { if(isBlank(field.value)) { field.value=value; } }

function isBlank(s) {
	if(s.length==0)return true;
	for(var i=0; i<s.length; i++) {
		if(s.charAt(i)!=" ")return false;
	}
	return true;
}

function isNumeric(str) {
	str=str+"";
	digits="0123456789";
	for (var i=0; i<str.length; i++) {
		if (digits.indexOf(str.charAt(i))==-1) {
			return false;
		}	
	}
	return true;
}

function getRadioValue(set) {
	for(var n=0; n<set.length; n++) {
		if(set[n].checked) {
			return set[n].value;
		}
	}
	return "";
}

function getRadioIndex(set,value) {
	for(var n=0; n<set.length; n++) {
		if(set[n].value==value) {
			return n;
		}
	}
	return -1;
}

function getCheckedRadioIndex(set) {
	for(var n=0; n<set.length; n++) {
		if(set[n].checked) {
			return n;
		}
	}
	return -1;
}

function checkedRadio(set) {
	checked=false;
	for(var n=0; n<set.length; n++) {
		if(set[n].checked) {
			checked=true;
			break;
		}
	}
	return checked;
}

function checkBox(box) {
	box.checked=(box.checked)?false:true;
}

function getPath(loc) {
    var loc=loc.toString();
	var normal=loc.lastIndexOf("/");
	var reverse=loc.lastIndexOf("\\");
	return (reverse>normal)?loc.substring(0,reverse+1):loc.substring(0,normal+1);
}

function getFilename(loc) {
	var loc=loc.toString();
	return loc.substring(loc.lastIndexOf('/')+1,loc.length);
}

function error(msg) {
	if(document.getElementById) {
		errm=getLayer('errmsg');
		errm.innerHTML=msg;
	} else {
		alert(msg);
	}
}

function getLayer(lyr) {
	if(document.getElementById) return document.getElementById(lyr);
	if(document.layers) return document.layers[lyr];
	if(document.all) return document.all[lyr];
	return null;
}

function getLyrObj(lyr) {
	if(document.getElementById) return document.getElementById(lyr).style;
	if(document.layers) return document.layers[lyr];
	if(document.all) return document.all[lyr].style;
	return null;
}

function swapClass(id,name) {
    lyr=getLayer(id);
    if(lyr != null) {
        lyr.className=name;
    }
}

function write(lyr,html) {
	lyr=getLayer(lyr);
	if (document.layers) {
		with(lyr.document) { open(); write(html); close(); }
	} else {
		lyr.innerHTML=html;
	}
}

function toggleOpinion(id) {
	var expand=(document["opinion_img_"+id].src.indexOf("plus.gif")!=-1);
	document["opinion_img_"+id].src=(expand)?img_path+"/minus.gif":img_path+"/plus.gif";

	var comments=getLyrObj("comments_"+id);
	comments.display=(expand)?"block":"none";
}

function pop(file,w,h) {
	var admin_win=window.open(file,'','width='+w+',height='+h+',top=0,menubar=no,toolbar=no,scrollbars=yes,resizable=yes,location=no,status=no');
	if(window.resizeTo)admin_win.resizeTo(w,h);
	if(window.focus)admin_win.focus();
}

function previewContent(content) {
	var preview_content=window.open('','preview_content','width=640,height=480,toolbar=no,scrollbars=yes,resizable=yes,location=no,status=no');
	with(preview_content.document) {
		open(); write(content); close();
	}
	if(preview_content.focus)preview_content.focus();
}

function clear(menu) {
	for(var j=0; j<menu.options.length; j++) {
		menu.options[j]=null;
	}
	menu.options.length=0;
	menu.options[0]=new Option("*Select from list*",0);
}

function set(menu) {
	var n=1;
	for(var i=1; i<set.arguments.length; i++) {
		entry=set.arguments[i].split("__");
		menu.options[n]=new Option(entry[1],entry[0]);
		n++;
	}
	//menu.options[1].selected=true;
}

var submitting=0;
function nice(form) {
	if(!submitting) {
		submitting=1;
		form.submit_btn.disabled=true;
		return true;
	}
	return false;
}
function popupWindow_middlecenter(purl,pname,pwidth,pheight,dx,dy,pstr) {
	var availWidth=window.screen.availWidth;
	var availHeight=window.screen.availHeight;

	if (window.screen.availWidth>1600) {
		availWidth-=window.screen.availWidth/2;
	}
    var px=(availWidth -pwidth )/2 + dx;
    var py=(availHeight-pheight)/2 + dy;

    PopupWindow_middlecenter = 
    window.open(purl,pname,'left='+px+',top='+py+',width='+pwidth+',height='+pheight+','+pstr+'');
	PopupWindow_middlecenter.focus();

}

String.prototype.trim=function() {
	a=this.replace(/^\s+/,'');
	return a.replace(/\s+$/,'');
}

String.prototype.ucfirst=function() {
	return this.charAt(0).toUpperCase() + this.substring(1,this.length).toLowerCase();
}

Array.prototype.arrange=function() {
	if(this.length<10) {
		this.sort();
	} else {
		tmp_min=new Array(); n=0;
		tmp_max=new Array(); j=0;
		for(var i=0; i<this.length; i++) {
			if(trim(this[i].toString()).length==1) {
				tmp_min[n]=this[i]; n++;
			} else {
				tmp_max[j]=this[i]; j++;
			}
		}
		var i=0, x=0;
		tmp_min.sort();
		tmp_max.sort();
		while(i<tmp_min.length) {
			this[i]=tmp_min[i];
			i++;
		}
		while(x<tmp_max.length) {
			this[i]=tmp_max[x];
			i++; x++;
		}
	}
}
