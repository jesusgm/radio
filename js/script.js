/**
 * funcionalidad en js
 */
$(document).ready(function(){
	//click on a radio link
	$('#canciones a.botones').on('click', function(){
		$('#reproductor').attr('src', $(this).attr('alt'));
		$('#marquesina').html($(this).attr('rel'));
		play();
	})
	
	$('#enlaceplay').on('click', function(){
		play();
	});
	
	$('#enlacepause').on('click', function(){
		pause();
	});
});



/*
function setCancion(url){
	if(url == '')
		url = document.getElementById('url').value;
	reproductor = document.getElementById('reproductor');
	reproductor.src = url;
	play();
}*/
function play(){
	reproductor = document.getElementById('reproductor').play();
	document.getElementById('enlaceplay').style.display = 'none';
	document.getElementById('enlacepause').style.display = 'block';
}
function pause(){
	reproductor = document.getElementById('reproductor').pause();
	document.getElementById('enlaceplay').style.display = 'block';
	document.getElementById('enlacepause').style.display = 'none';
}
/*
function setActive(input){
	allinputs = document.getElementsByClassName('url');
	for(i=0;i<allinputs.length;i++){
		allinputs[i].className = 'url';
	}
	input.getElementsByTagName('img')[0].className = input.getElementsByTagName('img')[0].className + ' active'
}

function init(){
	url = document.getElementsByClassName('botones')[0];
	url = url.getAttribute("alt");
	console.log(url);
	setCancion(url);
}*/
