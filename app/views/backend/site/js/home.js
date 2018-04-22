$("#btn-clique-me").on("click", function(){
	let arrCores = ['red', 'blue', 'yellow', 'pink'];
	let num      = parseInt(arrCores.length * Math.random());
	$("h2").css('color', arrCores[num]);
})