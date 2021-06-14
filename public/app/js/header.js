function openNav() {
    document.getElementById("primary-navigation").style.width = "350px";
    document.getElementById("primary-navigation").style.length = "1080px";
  }
  
  function closeNav() {
    document.getElementById("primary-navigation").style.width = "0";
  }
  function openlist(){
    var x  = document.getElementById("arrow");
    x.classList.toggle("transformright");
    if(document.getElementById("dropdown").style.display == "" || document.getElementById("dropdown").style.display == "none"){
    document.getElementById("dropdown").style.display = "block";
  
  }
    else {document.getElementById("dropdown").style.display = "none";
    
    }
  }