function myFunction(imagen) {
	var con=document.getElementById(imagen);
	console.log(con);
	var src=con.getAttribute("src");
	console.log(src);
	var img=document.getElementById("img_producto");
	img.setAttribute("src",src);
}