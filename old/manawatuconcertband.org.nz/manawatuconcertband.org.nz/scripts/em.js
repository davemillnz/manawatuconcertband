var scripts = document.getElementsByTagName('script');
var tag = scripts[scripts.length-1];
var name = tag.innerHTML;
var host = "manawatuconcertband.org.nz"
var addr = name + "@" + host;
document.write("<a href='" + "mail" + "to:" + name + "@" + host + "'>" + addr + "</a>");