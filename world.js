
document.addEventListener("click", search);


function search()
{
  document.getElementById("lookup");
  alert(document.getElementById("term").value);
    
}



function showCountry(strng)
{
    var xmlhttp; 
    
    if (strng==" ")
      {
          document.getElementById("result").innerHTML=" ";
          return;
      }
      
    if (window.XMLHttpRequest)              // code for IE7+, Firefox, Chrome, Opera, Safari
      {
          xmlhttp=new XMLHttpRequest();
      }
    else
      {
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");       // code for IE6, IE5
      }
      
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            search();
            document.getElementById("result").innerHTML=xmlhttp.responseText;
        }
      }
      
    xmlhttp.open("GET", "world.php?q=" + strng, true);
    
    xmlhttp.send();
}