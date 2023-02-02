function navbarmenu(){
    var a = document.getElementById("search1");
    var b = document.getElementById("cart");
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