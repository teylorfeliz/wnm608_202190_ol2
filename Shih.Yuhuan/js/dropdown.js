class DropDown {
    constructor(element){
        let btn = element.querySelector('.dropdown-btn')
        let body = element.querySelector('.dropdown-body')
        
        btn.addEventListener("click",()=>{
            
            if(element.classList.contains('hide')){
                element.classList.remove('hide')
                setTimeout(()=>{
                    element.classList.add('active')
                },0)
                
            }
            if(element.classList.contains('active')){
                element.classList.remove('active')
                body.ontransitionend = e =>{
                    if(e.propertyName == "opacity"){
                        element.classList.add('hide')
                    }
                    body.ontransitionend = null
                }
            }
        })
    }
}