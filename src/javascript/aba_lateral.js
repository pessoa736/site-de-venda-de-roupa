let btn = document.querySelector("button")
btn.setAttribute("class", "btn_left_bar")
btn.setAttribute("id", "btn_left_bar")

btn.style.margin = "10px"
btn.style.zIndex = "1000"
btn.style.width = '10px'
btn.style.height = '5px'
btn.style.opacity = "100%"
btn.style.alignItems = "center"
btn.style.position = "fixed 10px"


let icon = document.querySelector("img")
icon.setAttribute("class", "icon")
icon.setAttribute("id", "icon")
icon.setAttribute("src", "src/imagem/icones/aba_lateral.jpg")

icon.style.width = "32px"
icon.style.height = "32px"

icon.style.marginLeft = "-16px"
icon.style.marginTop = "-16px"
btn.appendChild(icon)




let sidebar = document.querySelector("div")
sidebar.setAttribute("class", "sidebar")
sidebar.setAttribute("id", "sidebar")
sidebar.style.width = "250px"
sidebar.style.height = "100%"
sidebar.style.position = "fixed"
sidebar.style.left = "-250px"
sidebar.style.top = "0px"
sidebar.style.backgroundColor = "#fff"  

let open = false
function runtime(){      
    btn.addEventListener("click", function(){
        open = !open
        if (!open){
            sidebar.style.left = "-250px"

        }else{
            sidebar.style.left = "0px"
        }
    })
}

let interval = setInterval(runtime,0)





