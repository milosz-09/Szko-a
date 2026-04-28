const oblicz = document.querySelector("#Oblicz")
const pole = document.querySelector("#pole")

    oblicz.addEventListener("click", function(){
        const długość = document.querySelector("#długość").value
        const szerokość = document.querySelector("#szerokość").value
        const wybór = document.querySelector("#deska")

        if (długość && szerokość){
            let wynik = długość * szerokość
            pole.innerHTML = "Pole powierzchni pomieszczenia:" + wynik
        }
        else{
            pole.innerHTML = "Podaj liczbę w obydwu polach:"
        }
    })