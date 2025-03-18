// General utilities for views management

// Disable a button n milliseconds
export function disableBtn(btn, time){
    btn.setAttribute("disabled", "disabled")
    setTimeout(() =>{
        btn.removeAttribute("disabled")
    }, time)
}


export function showPopUp(message){
    let popUp = document.getElementById("popUp")
    popUp.setAttribute("message", message)
    popUp.show()
}

export function showFailPopUp(popUpId, content){
    let popUp = document.getElementById(popUpId)
    let popUpMessage = popUp.querySelector("#popUpMessage") 
    popUpMessage.textContent = content
    popUp.style.animation = "showPopUp 2s ease-in-out forwards"
    setTimeout(() =>{
        popUp.style.animation = ""
    }, 2000)
}

export function changeBorder(domElement, borderWidth, color){
    domElement.style.border = borderWidth + 'solid ' + color
}