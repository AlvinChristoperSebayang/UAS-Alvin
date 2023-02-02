function belanja() {
  var a = document.getElementById("cart");
  var b= document.getElementById("search1");
  var c = document.getElementById("fav");
  if (a.style.display === "block") {
    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "none";
  } else {
    a.style.display = "block";
    b.style.display = "none";
    c.style.display = "none";

  }
}