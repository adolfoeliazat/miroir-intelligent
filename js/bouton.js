/*configuration des url des images*/
var imageon="./b1.jpg";
var imageoff="./b2.jpg";
var imagecache="./b0.png";
//cependant il est préférable de mettre les valeurs de ces images en dur dans le code (si elles ne sont pas destinées à être changées)
/**************/
	
function generate_button(){
	//cette fonction doit être appelée au chargement de la page
	//permet de remplacer tous les input ayant pour class "button_on_off" par ce système de bouton
	
	var button,image1,image2,element;
	var alls=document.getElementsByTagName("input");
	var i=0,li=alls.length;
	while(i<li){
		if((element=alls[i]).className==="button_on_off"){
			element.type="hidden";
			button=document.createElement("div"); //creation de l'element contenant le tout
			button.title=element.title;
			button.style.display="inline";
			button.style.position="relative";
			image1=document.createElement("img"); //creation de l'image de fond
			if(element.value==="on"){
				image1.src=imageon;
				element.value="off"; //car il sera activé plus tard
			}else{
				image1.src=imageoff;
				element.value="on"; //car il sera desactivé plus tard
			}
			image1.style.position="relative";
			button.appendChild(image1);
			image2=document.createElement("img"); //creation de l'image représentant le cache
			image2.src=imagecache;
			image2.style.position="absolute";
			button.appendChild(image2);
			button.onclick=switch_button(element,image1,image2);
			image1.onload=button.onclick; //afin de placer le cache au bon endroit (attention cela inverse la valeur)
			element.parentNode.insertBefore(button,element);
		}
		i++;
	}
	
}
function  switch_button(elem_source,elem_button,elem_cache) {
	//permet de gérer les commutations
	var cible=0;
	function move(dx,i){
	//fonction encapsulée qui sert à gérer l'animation du cache et le changement d'image du bouton
		if(i===5){
			//changement d'image
			if(elem_source.value==="on"){
				elem_button.src=imageon;
			}else{
				elem_button.src=imageoff;
			}
		}
		if(i<10){
			//animation
			elem_cache.style.left=(parseInt(elem_cache.style.left,10)+dx)+"px";
			setTimeout(function(){move(dx,++i);},30);
		}else{
			elem_cache.style.left=cible+"px";
		}
	}
	return function(){
		//fonction lancée lorsqu'on clique sur le bouton. Elle change la valeur du input et lance l'animation
		if(elem_button.onload){elem_button.onload=null;}
		if(elem_source.value==="on"){
			elem_source.value="off";
			cible=0;
		}else{
			elem_source.value="on";
			cible=parseInt(elem_button.offsetWidth,10)-parseInt(elem_cache.offsetWidth,10);
		}
		var dx=(cible-parseInt(elem_cache.style.left,10))/10;
		move(dx,1);
	}
}

window.onload=generate_button;

