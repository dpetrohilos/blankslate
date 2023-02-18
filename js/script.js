function onClickMenu()
{
  document.getElementById("menu").classList.toggle("change");
  document.getElementById("nav").classList.toggle("change");
  document.getElementById("label").classList.toggle("change");
  document.getElementById("menu-bg").classList.toggle("change-bg");
  document.getElementById("branding").classList.toggle("change");


}

// accessbility 

document.addEventListener('keydown', function(event){
	if(event.key === "Escape"){
document.getElementById("menu").classList.remove("change");
  document.getElementById("nav").classList.remove("change");
  document.getElementById("label").classList.remove("change");
  document.getElementById("menu-bg").classList.remove("change-bg");
  document.getElementById("branding").classList.remove("change");


	}
});


window.scroll({
  top: 2500, 
  left: 0, 
  behavior: 'smooth'
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 100, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});
