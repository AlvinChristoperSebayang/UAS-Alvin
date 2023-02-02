function menunav(){
  var a = document.getElementById("cart");
  var b= document.getElementById("search1");
  var c = document.getElementById("fav");
  var d = document.getElementById("menu");
  if (d.style.display === "block") {
    d.style.display = "none";
    b.style.display = "none";
    c.style.display = "none";
    a.style.display = "none";
  } else {
    d.style.display = "block";
    b.style.display = "none";
    c.style.display = "none";
    a.style.display = "none";
  }
}