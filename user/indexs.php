<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#CCFFE5 ;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>
<?php
// navbar
    include 'nav.php';



?>
<!-- Header -->
<div class="header" id="myHeader" style="margin-top:120px;">
  <h1>Project Showcase</h1>
  
  <button class="btn" onclick="four()">Zoom Out</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="1.jpg" style="width:100%">
    <img src="2.jpg" style="width:100%">
    <img src="3.jpg" style="width:100%">
    <img src="4.jpg" style="width:100%">
    <img src="5.jpg" style="width:100%">
    <img src="6.jpg" style="width:100%">
    <img src="7.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="1.jpg" style="width:100%">
    <img src="2.jpg" style="width:100%">
    <img src="3.jpg" style="width:100%">
    <img src="4.jpg" style="width:100%">
    <img src="5.jpg" style="width:100%">
    <img src="6.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="3.jpg" style="width:100%">
    <img src="5.jpg" style="width:100%">
    <img src="4.jpg" style="width:100%">
    <img src="2.jpg" style="width:100%">
    <img src="1.jpg" style="width:100%">
    <img src="7.jpg" style="width:100%">
    <img src="5.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="1.jpg" style="width:100%">
    <img src="2.jpg" style="width:100%">
    <img src="3.jpg" style="width:100%">
    <img src="4.jpg" style="width:100%">
    <img src="5.jpg" style="width:100%">
    <img src="1.jpg" style="width:100%">
  </div>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;


// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
