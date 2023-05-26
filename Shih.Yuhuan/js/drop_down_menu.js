class DropDownMenu{
    constructor(element){
        this.btn = element
        this.body = document.querySelector(element.dataset.target)
        let drop = this.body

        element.addEventListener("click",function(e){
            
            if(drop.classList.contains('show')){
                drop.classList.remove('show')
                drop.classList.add('hidding')
                drop.ontransitionend = e =>{
                    if(e.propertyName=="height"){
                        drop.classList.remove('hidding')
                        drop.classList.add('hide')
                        drop.ontransitionend = null
                    }
                }
            }

            if(drop.classList.contains('hide')){
                drop.classList.add('hidding')
                drop.classList.remove('hide')
                setTimeout(()=>{
                    drop.classList.remove('hidding')
                    drop.classList.add('show')
                },0)
                
            }

        })
    }
}