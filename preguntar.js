// console.log("vas bien");
document.getElementById('siguiente').disabled = true;
email.addEventListener("blur", (evento) => {

    var email = evento.target.value;

    var x = new XMLHttpRequest();



    x.addEventListener("readystatechange", () => {

        if (x.readyState === 4 && x.status === 200) {
            respuesta.innerHTML = x.responseText;
            if (x.response === 'Usuario ya registrado <img src="https://cdn.pixabay.com/photo/2017/02/12/21/29/false-2061131_960_720.png"style="width:19px;">') {
                document.getElementById('bloqueo').innerHTML = document.getElementById('siguiente').disabled = true;

            } else {
                document.getElementById('bloqueo').innerHTML = document.getElementById('siguiente').disabled = false;
            }
        } else {
            console.log("Status:", x.status);
            console.log("Status:", x.readyState);
        }
    })



    x.open("POST", "preguntar.php?email=" + email, true);
    x.send();
});