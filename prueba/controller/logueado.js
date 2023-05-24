const sesion=()=>{
    fetch(`../model/sesion.php`)
        .then(data=>data.json())
        .then(data=>{
            if(data==`1`){
                location.href=`panel.html`;
            }
        })
        .catch(error=>console.error(error))
}

const result=async()=>await sesion();

result();