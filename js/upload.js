var form = document.forms.namedItem("form-upload");
form.addEventListener('submit',function(ev){
    var output = document.getElementById('#reflector'),oData = new FormData(form);
    var oReq = new XMLHttpRequest();
    oReq.open("POST","http://localhost/Chiri_Man/php/Upload.php",true);
    oReq.onload = function(){
        if(oReq.status == 200){
  output.innerText = "File Uppload";          

        }else{
            output.innerHTML="File Not Uploaded";
        }
    }
    oReq.send(oData);
    ev.preventDefault();
},false);
