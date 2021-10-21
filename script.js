
console.log("123");
function sendMail(params){
    var tempParams ={
        from_name:document.getElementById("fromname").value,
         to_name:document.getElementById("toname").value,
          message:document.getElementById("msg").value,
    };

    emailjs.send('service_lko94xb','template_3ufy2nr',tempParams)
    .then(function(res){
        console.log("success",res.status);
    })
}