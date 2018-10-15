var feebDb;

$(document).ready(function() {
	 
	
var config = {
    apiKey: "AIzaSyDow4IhQ2MoI-lbttw49h37o5tjt7yDICg",
    authDomain: "smokey-wcc.firebaseapp.com",
    databaseURL: "https://smokey-wcc.firebaseio.com",
    projectId: "smokey-wcc",
    storageBucket: "smokey-wcc.appspot.com",
    messagingSenderId: "164988396543"
  };
  firebase.initializeApp(config);
 
   feebDb = firebase.database().ref("ip");
   feebDb.on("child_added", newMessage); //cada ves que se agrega uno
 //  feebDb.on("child_change", updateMessage); //cada vex que se modifica
   feebDb.on("child_remove", removeMessage); //cada vex que se modifica
 
  
 
 
 });
 
 var num=0;
 
 function removeMessage(msg) {
      console.error("algien elemino :"+msg.key);
      $("#"+msg.key).remove();
  }
 
 function newMessage(msg) { 
          
      
      var obj = msg.val();
          var fecha=new Date();
 var card = "<li  id='"+ msg.key +"' ><a stryle='paddind-botton: 2%;'><div class='col col-sm-11'><input type='text' class='form-control input-md' value='Direccion:192.168.148.2 Ubicacion:Comerdor Estado:"+ obj + fecha.toUTCString() +"'  ></div><div class='col col-md-1'><button class='btn btn-danger glyphicon glyphicon-remove-sign btn-xs' name='"+ msg.key +"' onclick='deleteMessage(this.name);'> </buttom></div></a></li>";
          
		  $("#lista").append(card);
		  if(num>10){
			  
		  alert(obj);
		  }
  }


 function deleteMessage(key) {
      feebDb.child(key).remove();
  }
function editMessage(key) {
    //var Key=$()
    var title = "jose";
    var message = "es es mmi mensaje modificado";
     var msg = new Datos();
     feebDb.child(key).update(msg);
}
  function updateMessage(msg) {
      console.warn(msg);
      console.warn(msg.val());

      var obj= msg.val();
      $("#"+msg.key).text(obj.message);

  }
 
 $("#btnAdd").click(function() {
	alert("adkowpkdaopk");
 });
 
 
 function  deleteMessage(key) {
      feebDb.child(key).remove();
  }
  
 function Datos(Nombre,Telefono,Direccion,Ubicacion) {
      this.title = title;
      this.message = message;
      this.time= new Date();
      this.user = theUser;
      this.like = 0;
  }