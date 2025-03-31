function login() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email == "") {
    alert("Pleace enter email");
  } else if (password == "") {
    alert("Pleace enter password");
  } else {
    var f = new FormData();
    f.append("email", email);
    f.append("password", password);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText.trim();

        if (t === "done") {
          window.location = "index.php";
        } else {
          alert(t);
        }
      }
    };

    r.open("POST", "loginproces.php", true);
    r.send(f);
  }
}

function signUp() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var name = document.getElementById("name").value;
  var passwordRe = document.getElementById("passwordRe").value;

  if (name == "") {
    alert("Pleace enter your name");
  } else if (email == "") {
    alert("Pleace enter email");
  } else if (password == "") {
    alert("Pleace enter password");
  } else if (password != passwordRe) {
    alert("Pleace checkyour password");
  } else {
    var f = new FormData();
    f.append("email", email);
    f.append("password", password);
    f.append("name", name);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText.trim();

        if (t == "Done") {
          window.location = "loglog.php";
        } else {
          alert(t);
        }
      }
    };

    r.open("POST", "signUpproces.php", true);
    r.send(f);
  }
}

function AddToCart(id) {
  var f = new FormData();
  f.append("id", id);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText.trim();
      if (t == "login") {
        window.location = "loglog.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "AddToCart.php", true);
  r.send(f);
}

function order() {
  var table = document.getElementById("table").value;

  if (table == "") {
    alert("Pleace enter table number");
  } else {
    var f = new FormData();
    f.append("table", table);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText.trim();

        alert("Done");
        window.location = "bill.php?id=" + t;
      }
    };

    r.open("POST", "OrderProcess.php", true);
    r.send(f);
  }
}

function adminlogin() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email == "") {
    alert("Pleace enter email");
  } else if (password == "") {
    alert("Pleace enter password");
  } else {
    var f = new FormData();
    f.append("email", email);
    f.append("password", password);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText.trim();

        if (t === "done") {
          window.location = "admin_page.php";
        } else {
          alert(t);
        }
      }
    };

    r.open("POST", "loginproces.php", true);
    r.send(f);
  }
}

function AddProduct() {
  var image = document.getElementById("img");
  var name = document.getElementById("name").value;
  var price = document.getElementById("price").value;
  var discription = document.getElementById("discription").value;
 

  if (name == "") {
    alert("Enter name");
  } else if (price == "") {
    alert("Enter price");
  } else if ( discription == "") {
    alert("Enter discription");
 
  } else {
    var f = new FormData();
    var file_count = image.files.length;

    if (file_count == 1) {
      f.append("image", image.files[0]);
      f.append("name", name);
      f.append("price", price);
      f.append("discription", discription);
      
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText;
        alert(t);
      }
    };

    r.open("POST", "addProduct.php", true);
    r.send(f);
  }
}
