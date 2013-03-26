//---------------------------------------------------------------
//--------------- Retina graphics for <img> tags ----------------
//---------------------------------------------------------------
// This awesome script is inspired by http://realmacsoftware.com/blog/coding-for-retina-on-the-web

$(function(){ retina(); });
function retina(){
	var retina = (window.devicePixelRatio > 1) ? true : false;
	$(".2x").each(function(i,img){
		var src = $(img).attr("src");
		if(retina){ src = src.replace(/\.\w+$/, function(ext){ return "@2x" + ext; }); }
		else{ src.replace("@2x", ""); }
		$(img).attr("src", src);
	});
}
window.matchMedia("(device-pixel-ratio: 1)").addListener(retina_swap);