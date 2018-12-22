var size = document.getElementsByClassName("slide")[0].clientWidth;
var MoveSlide = document.getElementsByClassName("move-slide")[0];
var Img = MoveSlide.getElementsByTagName("img");
var Max = size * Img.length;
Max -= size;
var Move = 0;
function Next(){
	if(Move < Max) Move += size;
	else Move = 0;
	MoveSlide.style.marginLeft = '-' + Move + 'px';
}

function Back(){
	if(Move == 0) Move = Max;
	else Move -= size;
	MoveSlide.style.marginLeft = '-' + Move + 'px';
}	
var interval_obj = setInterval(function(){
	Next();
},5000)
function moved_show(){
    document.getElementsByClassName("next")[0].style.display="block";
    document.getElementsByClassName("prev")[0].style.display="block";
}	
function moved_hide(){
    document.getElementsByClassName("next")[0].style.display="none";
    document.getElementsByClassName("prev")[0].style.display="none";
}