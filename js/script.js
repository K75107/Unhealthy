/*Global-Start*/
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
