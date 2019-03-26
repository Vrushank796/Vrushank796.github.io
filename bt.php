<?php 

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<title>Book ticket</title>
  <style>
    * {
  box-sizing: border-box;
}

body {
  font-size:20px;
    font-family:Times New Roman; 
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
input[type=date] {
  background-color: #f1f1f1;
  width: 100%;
  border-radius: 20px;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
</style>
</head>
<body <div class="myDiv">
    <div class="bg1"></div></div>	
 <div class="navbar">
    <a href="homepage.html">Home</a>
  
   <div class="dropdown">
      <button class="dropbtn">Train 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
       <a href="bt.php">Book ticket</a>
       <a href="#">Cancel ticket</a>
       <a href="#">PNR Enquiry</a>
     </div>
    </div> 
    <a href="#">Seat Availability</a>
   <a href="#">Fare Enquiry</a>
   <a href="trainschedule.php">Train Schedule</a>
   <a href="contact.html">Contact Us</a>
   <a href="loginform.php">Sign up</a>
  <a href="loginform.php">Sign in</a>
  </div>
  <br>
	<center>
    <img src="btn.png" align="center" height="125px" width="195px"><br>
<form method="POST" action="train.php">
<div class="autocomplete" style="width:300px;">
<input type="text" name="from" id="from" placeholder="From"  title="Enter Source Here" onkeyup="this.value = this.value.toUpperCase();"></input>
<br>
<img src="verta.png" align="center" height="27px" width="27px" onClick="swap_content()"><br>
<input type="text" name="to" id="to" placeholder="To"  title="Enter Destination here" onkeyup="this.value = this.value.toUpperCase();"></input>
<br>
<input type="date" id="date"></input>
<br>
</div>
<br>
<button type="submit" name="submit" class="button">Find trains</button>
<br>
</form>
<br>

<script>
 
  function swap_content(){
var tmp = document.getElementById('from').value;
document.getElementById('from').value = document.getElementById('to').value;
document.getElementById('to').value = tmp;
}

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var city = ["PORBANDAR","WANSJALIYA","JAM JODHPUR JN","UPLETA","JETALSAR JN","GONDAL","BHAKTI NAGAR","RAJKOT JN","VIRAMGAM JN","AHMEDABAD JN","ANAND JN","VADODARA JN","BHARUCH JN","SURAT","NANDURBAR ","JALGAON JN"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("from"), city);
autocomplete(document.getElementById("to"), city);
</script>
<?php

if(isset($_SESSION['error'])){

echo $_SESSION['error'];
}


if(isset($_SESSION['success']))
	{

		echo $_SESSION['success'];
	}


?>

</center>
	</body>
	</html>
<?php

unset($_SESSION['error']);
unset($_SESSION['success']);

?>
	
