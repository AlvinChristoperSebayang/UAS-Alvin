function search() {
  var a = document.getElementById("cart");
  var b= document.getElementById("search1");
  var c = document.getElementById("fav");
  if (b.style.display === "block") {
    b.style.display = "none";
    a.style.display = "none";
    c.style.display = "none";
  } else {
    b.style.display = "block";
    a.style.display = "none";
    c.style.display = "none";
  }
  }
