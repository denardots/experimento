const sesion=()=>{
    fetch(`../model/sesion.php`)
        .then(data=>data.json())
        .then(data=>{
            if(data==`0`){
                location.href=`login.html`;
            }
        })
        .catch(error=>console.error(error))
}

const result=async()=>await sesion();

result();