const trueNumber = function (num, max) {
    return num < 0 ? num + max : num;
}
const signNumber = function (num, max) {
    return num > max * 0.5 ? num % max - max : num;
}

const wrapNumber = function (num, max) {
    return trueNumber(signNumber(num, max), max);
}

class Carousel {
    constructor(object) {
       
        Object.assign(this, object);


        let carousel = this;

        this.slides = this.element.find(".slide");        
        this.dots = this.element.find(".dot");

        this.currentSlide = 0;             

        if (this.timing) {
            this.startSlideShow();
        }

        this.element.find(".last").on("click", function () {                      
            carousel.changeSlide(false);
            carousel.restartSlideShow();
        })

        this.element.find(".next").on("click", function () {
            carousel.changeSlide(true);
            carousel.restartSlideShow();
        })

        this.element.find(".dot").on("click", function () {
            let index = $(this).index();
            carousel.changeSlide(index);
            carousel.restartSlideShow();
        })
    }

    
    changeSlide(direction){
        this.previousSlide = this.currentSlide;

        if(direction===true){
            this.currentSlide++;
        } else
        if(direction===false){
            this.currentSlide--;
        } else {
            if(this.currentSlide === direction){return};
            this.currentSlide = direction;
            direction = this.currentSlide - this.previousSlide;            
        }
        this.currentSlide = wrapNumber(this.currentSlide, this.slides.length)
        
        this.currentSlides = {
            1: this.currentSlide,
            2: wrapNumber(this.currentSlide+1, this.slides.length),
            3: wrapNumber(this.currentSlide+2, this.slides.length)
        }

        this.previousSlides = {
            1: this.previousSlide,
            2: wrapNumber(this.previousSlide+1, this.slides.length),
            3: wrapNumber(this.previousSlide+2, this.slides.length)
        }
        
        this.showSlide(direction)
    }

    showSlide(direction){
        let c = this
        
        this.slides.attr("class","slide")
        this.slides.eq(this.previousSlides[1]).addClass("stage-1")
        this.slides.eq(this.previousSlides[2]).addClass("stage-2")
        this.slides.eq(this.previousSlides[3]).addClass("stage-3")

        if(direction==1){
            this.slides.eq(this.currentSlides[3]).addClass("right-1")
        } else 
        if(direction==2){
            this.slides.eq(this.currentSlides[2]).addClass("right-2")
            this.slides.eq(this.currentSlides[3]).addClass("right-3")
        } else
        if(direction>=3){
            this.slides.eq(this.currentSlides[1]).addClass("right-1")
            this.slides.eq(this.currentSlides[2]).addClass("right-2")
            this.slides.eq(this.currentSlides[3]).addClass("right-3")
        } else
        if(direction==-1||direction==false){
            this.slides.eq(this.currentSlides[1]).addClass("left-1")
        } else 
        if(direction==-2){
            this.slides.eq(this.currentSlides[1]).addClass("left-2")
            this.slides.eq(this.currentSlides[2]).addClass("left-1")
        } else
        if(direction<=-3){
            this.slides.eq(this.currentSlides[1]).addClass("left-3")
            this.slides.eq(this.currentSlides[2]).addClass("left-2")
            this.slides.eq(this.currentSlides[3]).addClass("left-1")
        }

        if(direction==-(this.slides.length-2)){
            this.slides.eq(this.currentSlides[1]).attr("class","slide left-2")
            this.slides.eq(this.currentSlides[2]).attr("class","slide left-1")
        } else
        if(direction==-(this.slides.length-1)){
            this.slides.eq(this.currentSlides[1]).attr("class","slide left-3")
            this.slides.eq(this.currentSlides[2]).attr("class","slide left-2")
        }

        setTimeout(function(){

            c.dots.eq(c.currentSlide).addClass("active").siblings().removeClass("active");

            c.slides.eq(c.currentSlides[1]).attr("class","slide stage-1 moving")
            c.slides.eq(c.currentSlides[2]).attr("class","slide stage-2 moving")
            c.slides.eq(c.currentSlides[3]).attr("class","slide stage-3 moving")

            if(direction==1){
                c.slides.eq(c.previousSlides[1]).attr("class","slide left-1 moving")
            } else
            if(direction==2){
                c.slides.eq(c.previousSlides[1]).attr("class","slide left-2 moving")
                c.slides.eq(c.previousSlides[2]).attr("class","slide left-1 moving")
            } else
            if(direction>=3){
                c.slides.eq(c.previousSlides[1]).attr("class","slide left-3 moving")
                c.slides.eq(c.previousSlides[2]).attr("class","slide left-2 moving")
                c.slides.eq(c.previousSlides[3]).attr("class","slide left-1 moving")
            } else                 
            if(direction==-1||direction==false){
                c.slides.eq(c.previousSlides[3]).attr("class","slide right-1 moving")
            }  else
            if(direction==-2){
                c.slides.eq(c.previousSlides[3]).attr("class","slide right-2 moving")
                c.slides.eq(c.previousSlides[2]).attr("class","slide right-1 moving")
            }  else
            if(direction<=-3){
                c.slides.eq(c.previousSlides[3]).attr("class","slide right-3 moving")
                c.slides.eq(c.previousSlides[2]).attr("class","slide right-2 moving")
                c.slides.eq(c.previousSlides[1]).attr("class","slide right-1 moving")
            } 

            if(direction==(c.slides.length-2)){
                c.slides.eq(c.currentSlides[3]).attr("class","slide stage-3 moving")
            } else 
            if(direction==-(c.slides.length-2)){
                c.slides.eq(c.currentSlides[1]).attr("class","slide stage-1 moving")
            } else
            if(direction==(c.slides.length-1)){
                c.slides.eq(c.currentSlides[2]).attr("class","slide stage-2 moving")
                c.slides.eq(c.currentSlides[3]).attr("class","slide stage-3 moving")
            } else 
            if(direction==-(c.slides.length-1)){
                c.slides.eq(c.currentSlides[1]).attr("class","slide stage-1 moving")
                c.slides.eq(c.currentSlides[2]).attr("class","slide stage-2 moving")
            }

        },10)
    }


    startSlideShow() {
        let c = this;

        c.stopSlideShow();

        c.timer = setTimeout(function () {
            c.changeSlide(true);
            c.showSlide(true);
            c.startSlideShow();
        }, c.timing);
    }

    stopSlideShow() {
        clearTimeout(this.timer);
    }

    restartSlideShow() {
        let c = this;

        this.stopSlideShow();

        if (this.timing)
            this.timer = setTimeout(function () {
                c.startSlideShow();
            }, 5000);
    }

}



