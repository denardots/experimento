let pruebaPhp=()=>{
    fetch(`prueba.php`)
        .then(data=>data.json())
        .then(data=>console.log(data[0]))
        .catch(error=>console.error(error))
}
let result=async()=>await pruebaPhp();

result();