/*Global-Start*/

/*RECIPE-START*/
function exit1() {
  var element = document.getElementsByClassName("recipe1")[0];
  element.style.display = "none";
}

function show1(){
  var element = document.getElementsByClassName("recipe1")[0];
  element.style.display = "flex";
}

function exit2() {
  var element = document.getElementsByClassName("recipe2")[0];
  element.style.display = "none";
}

function show2(){
  var element = document.getElementsByClassName("recipe2")[0];
  element.style.display = "flex";
}
function exit3() {
  var element = document.getElementsByClassName("recipe3")[0];
  element.style.display = "none";
}

function show3(){
  var element = document.getElementsByClassName("recipe3")[0];
  element.style.display = "flex";
}
function exit4() {
  var element = document.getElementsByClassName("recipe4")[0];
  element.style.display = "none";
}

function show4(){
  var element = document.getElementsByClassName("recipe4")[0];
  element.style.display = "flex";
}
function exit5() {
  var element = document.getElementsByClassName("recipe5")[0];
  element.style.display = "none";
}

function show5(){
  var element = document.getElementsByClassName("recipe5")[0];
  element.style.display = "flex";
}
function exit6() {
  var element = document.getElementsByClassName("recipe6")[0];
  element.style.display = "none";
}

function show6(){
  var element = document.getElementsByClassName("recipe6")[0];
  element.style.display = "flex";
}

/*Popular*/
function P_exit1() {
  var element = document.getElementsByClassName("P_recipe1")[0];
  element.style.display = "none";
}

function P_show1(){
  var element = document.getElementsByClassName("P_recipe1")[0];
  element.style.display = "flex";
}
function P_exit2() {
  var element = document.getElementsByClassName("P_recipe2")[0];
  element.style.display = "none";
}

function P_show2(){
  var element = document.getElementsByClassName("P_recipe2")[0];
  element.style.display = "flex";
}
function P_exit3() {
  var element = document.getElementsByClassName("P_recipe3")[0];
  element.style.display = "none";
}

function P_show3(){
  var element = document.getElementsByClassName("P_recipe3")[0];
  element.style.display = "flex";
}
function P_exit4() {
  var element = document.getElementsByClassName("P_recipe4")[0];
  element.style.display = "none";
}

function P_show4(){
  var element = document.getElementsByClassName("P_recipe4")[0];
  element.style.display = "flex";
}
function P_exit5() {
  var element = document.getElementsByClassName("P_recipe5")[0];
  element.style.display = "none";
}

function P_show5(){
  var element = document.getElementsByClassName("P_recipe5")[0];
  element.style.display = "flex";
}
function P_exit6() {
  var element = document.getElementsByClassName("P_recipe6")[0];
  element.style.display = "none";
}

function P_show6(){
  var element = document.getElementsByClassName("P_recipe6")[0];
  element.style.display = "flex";
}
function T_exit1() {
  var element = document.getElementsByClassName("T_recipe1")[0];
  element.style.display = "none";
}

function T_show1(){
  var element = document.getElementsByClassName("T_recipe1")[0];
  element.style.display = "flex"; 
}

function T_exit2() {
  var element = document.getElementsByClassName("T_recipe2")[0];
  element.style.display = "none";
}

function T_show2(){
  var element = document.getElementsByClassName("T_recipe2")[0];
  element.style.display = "flex";
}
function T_exit3() {
  var element = document.getElementsByClassName("T_recipe3")[0];
  element.style.display = "none";
}

function T_show3(){
  var element = document.getElementsByClassName("T_recipe3")[0];
  element.style.display = "flex";
}
function T_exit4() {
  var element = document.getElementsByClassName("T_recipe4")[0];
  element.style.display = "none";
}

function T_show4(){
  var element = document.getElementsByClassName("T_recipe4")[0];
  element.style.display = "flex";
}
function T_exit5() {
  var element = document.getElementsByClassName("T_recipe5")[0];
  element.style.display = "none";
}

function T_show5(){
  var element = document.getElementsByClassName("T_recipe5")[0];
  element.style.display = "flex";
}
function T_exit6() {
  var element = document.getElementsByClassName("T_recipe6")[0];
  element.style.display = "none";
}

function T_show6(){
  var element = document.getElementsByClassName("T_recipe6")[0];
  element.style.display = "flex";
}
/*RECIPE-END*/


function show_sent() {
  var element = document.getElementsByClassName("message_sent")[0];
  element.style.display = "flex";

  setTimeout(function() {
    element.style.display = "none";
  }, 2000); 
}

function show_policy() {
  var element = document.getElementsByClassName("privacy_policy")[0];
  element.style.display = "flex";
}
function exit_policy() {
  var element = document.getElementsByClassName("privacy_policy")[0];
  element.style.display = "none";
}


  /*Slideshow - Start*/
  var count = 1;

  setInterval(function(){
    document.getElementById('radio' + count).checked = true;
    count++;
    
    if(count > 6){
      count = 1;
      // Add transition style to the element
      document.getElementById('first').style.transition = 'none';

    } else {
      // Remove transition style from the element
      document.getElementById('first').style.transition = '';
    }
  
  }, 6000);

 function next_slide(){
    count++;
    document.getElementById('radio' + count).checked = true;
    if(count > 6){
      count = 1;
    }
  }
  function previous_slide(){
    count--;
    document.getElementById('radio' + count).checked = true;
    if(count > 6){
      count = 1;
    }
  }

/*Global-End*/







/*Smallscreen*/
if (window.matchMedia("(max-width: 720px)").matches) {
  /*Login-Start*/
  function SlideUp() {
      var element = document.getElementById("signup");
      element.style.marginTop = "calc(100vw * -500/720)";
  }
  function SlideDown() {
      var element = document.getElementById("signup");
      element.style.marginTop = "0px";
  }
  /*Login-End*/





/*Widescreen*/
} else if (window.matchMedia("(min-width: 721px)").matches) {
  /*Login-Start*/
  function SlideUp() {
      var element = document.getElementById("signup");
      element.style.marginTop = "calc(100vw * -500/1920)";
  }
  function SlideDown() {
      var element = document.getElementById("signup");
      element.style.marginTop = "0px";
  }
  /*Login-End*/

}




/*On Scroll*/
window.addEventListener('scroll', function() {
  var elements = document.querySelectorAll('.scroll-effect');

  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    var elementPosition = element.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;

    if (elementPosition < windowHeight * 0.8) {
      element.style.opacity = '1';
      element.style.transform = 'translateY(0)';
    }
  }
});
