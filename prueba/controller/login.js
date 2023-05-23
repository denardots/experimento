const formLogin=document.getElementById(`formLogin`);
const mensaje=document.getElementById(`mensaje`);
// document.getElementById('enlacelimpiar').addEventListener('click', function() {
//     document.getElementById('limpiar').innerHTML = '';
// });
formLogin.addEventListener(`submit`,(e)=>{
    e.preventDefault();
    const datosForm=new FormData(formLogin);
    fetch(`../model/login.php`,{
        method: `POST`,
        body: datosForm
    })
        .then(data=>data.json())
        .then(data=>{
            if(data==`1`){
                location.href=`panel.html`;
            }else{
                mensaje.innerHTML=`DATOS INCORRECTOS`;
            }
    })
});
