<!DOCTYPE html>
<html>
<body>

<div id="id01"></div>
<script>
var myArray = [
  {
    "display": "JavaScript Tutorial",
    "url": "http://localhost/rekha/ws/images/f3.jpg"
  },
  {
    "display": "HTML Tutorial",
    "url": "http://localhost/rekha/ws/images/f3.jpg"
  },
  {
    "display": "CSS Tutorial",
    "url": "http://localhost/rekha/ws/images/f3.jpg"
  }
];

myFunction(myArray);

function myFunction(arr) {
  var out = "";
  var i;
  for(i = 0; i < arr.length; i++) {
    out += '<a href="' + arr[i].url + '">' + 
    arr[i].display + '</a><br>';
  }
  document.getElementById("id01").innerHTML = out;
}
</script>

</body>
</html>
