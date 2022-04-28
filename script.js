document.addEventListener("keyup", e=>{

  if (e.target.matches("#buscador")){

      if (e.key ==="Escape")e.target.value = ""

      document.querySelectorAll(".card").forEach(card =>{

          card.textContent.toLowerCase().includes(e.target.value.toLowerCase())
            ?card.classList.remove("filtro")
            :card.classList.add("filtro")
      })

  }


})