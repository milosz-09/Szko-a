
function tworzenie(){
    let kolor = document.getElementById("kolor").value
    console.log(kolor)

    if(kolor == ""){
        alert("Wybierz lub wpisz kolor")
    }

    let box = document.createElement("div")

    document.getElementById("kontener").appendChild(box)

    box.className = "box"

    box.style = "background-color: "+kolor

    box.innerText = "Kolor tła:"+kolor

    document.getElementById("formularz").addEventListener("submit", function(e){
        e.preventDefault()
    })

}
