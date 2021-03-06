function loadXMLDoc(url)
      {
      var xmlhttp;
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status == 200)
          {
            console.log("ready");
            var xml = xmlhttp.responseXML;
            // implement logic with the information 
            var option = document.getElementById("class").value;
            if (option != null) {
              loadTable(xml, option, "content");
            }
            else
            {
              alert("Please enter a class!");
            }
          }
          else if(xmlhttp.readyState == 1 )
          {
          	console.log("Connected");
          }
          else if(xmlhttp.readyState == 2 )
          {
          	console.log('request received ');
          }
          else if(xmlhttp.readyState == 3 )
          {
          	console.log('processing request ');
          }
          else if(xmlhttp.readyState == 4 && xmlhttp.status == 404 )
          {
          	console.log('404 Page Not Found');
          }
        }
      xmlhttp.open("GET",url,true);
      xmlhttp.send();
      }
      function loadTable(xmlDoc, classSelect, div)
      {
        var classes = xmlDoc.documentElement.getElementsByTagName('class');
        var selectedClass;
        for (var i = 0; i < classes.length; i++) {
          var currentClass = classes[i];
          if ((currentClass.firstElementChild.textContent) == classSelect) 
            {
              selectedClass = currentClass;
            };
        };
        var lessons = selectedClass.getElementsByTagName("lesson");
        var table = "<table class='table table-bordered'><tr><th>Lesson name</th><th>Materials</th></tr>";
        for (var i = 0; i < lessons.length; i++) {
          table = table + "<tr>"
          table = table + "<td>" + lessons[i].firstElementChild.textContent + "</td>";
          var materials = lessons[i].getElementsByTagName("material");
          table = table + "<td>";
          for (var j = 0; j < materials.length; j++) {
            var materialName = materials[j].getElementsByTagName("tag");
            var materialLink = materials[j].getElementsByTagName("source");
            table = table + "<a href='" + materialLink[0].firstChild.nodeValue + "'>" + materialName[0].firstChild.nodeValue + "</a><br/>";
          };
          table = table + "</td>";
          table = table + "</tr>";
        };
        table = table + "</table>"
        document.getElementById(div).innerHTML = table;
      }