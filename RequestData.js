function GetMeasurements(str) {
    var xhttp;
   
    if (str.length == 0) { 
      document.getElementById("txtMusic").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {        
        document.getElementById("txtMeasures").innerHTML = this.responseText;
      }      
    };
    xhttp.open("GET", "get_Measurements.php?q="+str, true);
    xhttp.send();   
  }