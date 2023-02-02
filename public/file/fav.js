function fav(){
    var a = document.getElementById("cart");
    var b= document.getElementById("search1");
    var c = document.getElementById("fav");

    if (c.style.display === "block") {
      c.style.display = "none";
      b.style.display = "none";
      a.style.display = "none";
    } else {
      c.style.display = "block";
      b.style.display = "none";
      a.style.display = "none";
    }
  }