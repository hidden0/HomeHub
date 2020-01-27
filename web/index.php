<!DOCTYPE html>
<html>
  <head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="layout.css">
    <script src="jquery.js"></script>
    <script>
      function updateLight(lights) {
    var bedRoomState = $( "[data-value='bedroom']" ).css("color");
    var allState = $( "[data-value='all']" ).css("color");
    var livingRoomState = $( "[data-value='livingroom']" ).css("color");
    switch(lights)
    {
      case 'bedroom':
        if(bedRoomState=="rgb(0, 0, 0)")
        {
          console.log("Bedroom off");
          toggleLight(3,"false");
          toggleLight(4,"false");
          toggleLight(5,"false");
        }
        else
        {
          console.log("Bedroom on");
          toggleLight(3,"true");
          toggleLight(4,"true");
          toggleLight(5,"true");
        }
        break;
      case 'livingroom':
        if(livingRoomState=="rgb(0, 0, 0)")
        {
          console.log("LivingRoom off");
          toggleLight(6,"false");
          toggleLight(8,"false");
          toggleLight(9,"false");
          toggleLight(10,"false");
          toggleLight(11,"false");
        }
        else
        {
          console.log("LivingRoom on");
          toggleLight(6,"true");
          toggleLight(8,"true");
          toggleLight(9,"true");
          toggleLight(10,"true");
          toggleLight(11,"true");
        }
        break;
      case 'all':
        if(allState=="rgb(0, 0, 0)")
        {
          console.log("All off");
          toggleLight(3,"false");
          toggleLight(4,"false");
          toggleLight(5,"false");
          toggleLight(6,"false");
          toggleLight(8,"false");
          toggleLight(9,"false");
          toggleLight(10,"false");
          toggleLight(11,"false");
        }
        else
        {
          console.log("All on");
          toggleLight(3,"true");
          toggleLight(4,"true");
          toggleLight(5,"true");
          toggleLight(6,"true");
          toggleLight(8,"true");
          toggleLight(9,"true");
          toggleLight(10,"true");
          toggleLight(11,"true");
        }
        break;
    }
  }
      function toggleLight(light, power) {
    if(power=="true")
    {
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://192.168.128.2/api/ouP-bwq6ZUQkRSAQtAbejkR5dXoGMW8sN3N8lyou/lights/"+light+"/state",
        "method": "PUT",
        "headers": {
          "Content-Type": "application/json",
          "Accept": "*/*",
        },
      "processData": false,
      "data": "{\n    \"on\": " + power + ",\n    \"sat\": 100,\n    \"bri\": 254,\n    \"hue\": 12000\n}"
     }
    }
    else
    {
      var settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://192.168.128.2/api/ouP-bwq6ZUQkRSAQtAbejkR5dXoGMW8sN3N8lyou/lights/"+light+"/state",
        "method": "PUT",
        "headers": {
          "Content-Type": "application/json",
          "Accept": "*/*",
        },
      "processData": false,
      "data": "{\n    \"on\": " + power + "\n}"
     }
    }
    $.ajax(settings).done(function (response) {
        //console.log(response);
      });
  }
    </script>
  </head>
<body>
  <div id="card"></div>
  <div id="card_controls">
    <div class="pager" style="float:left;"><</div>
    <div class="pager" style="float:right;">></div>
  </div>
</body>
</html>
