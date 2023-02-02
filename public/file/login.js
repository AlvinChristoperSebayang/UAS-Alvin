function login(){
    var a = document.getElementById("cart");
    var b= document.getElementById("search1");
    var c = document.getElementById("fav");
    var x =  document.getElementById("login");
    if (x.style.display === "block") {
      x.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      a.style.display = "none";
    } else {
      x.style.display = "block";
      b.style.display = "none";
      a.style.display = "none";
      c.style.display = "none";
    }
  }