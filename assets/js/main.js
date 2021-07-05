// Main file JS

window.addEventListener('load', () => {

    // Back to top start

    const basicScrollTop = ()=>{
    let btnTop=document.querySelector("#goTop");
        const btnReveal = ()=>{
            let position = document.querySelector('#position');
            // position.innerHTML = window.scrollY + 'px';
            if (window.scrollY >= 300) {
                btnTop.classList.add('is-visible');
            } else {
                btnTop.classList.remove('is-visible');
            }   
        };
        
        const TopscrollTo = ()=> {
            if(window.scrollY!=0) {
                window.scrollTo(0,0);
            }
        }
        // Listeners
        window.addEventListener('scroll', btnReveal);
        btnTop.addEventListener('click', TopscrollTo);  
    };

    basicScrollTop();

    // Back to top end

    // Remove animate for top site

    // document.querySelector('.fadeInLeft').classList.add('animated');
    // document.querySelector('.fadeInRight').classList.add('animated');
    
});

window.addEventListener('DOMContentLoaded', () => {

    // Add animiation 

    const animited = document.querySelectorAll('[data-animate]');

    animited.forEach((el, index)=>{
        el.classList.add('animated');
    });

    // Start toggle hamburger button

    const button = document.querySelector('.hamburger');
    const main = document.querySelector('.main');
    button.addEventListener('click', ()=>{
        button.classList.toggle('hamburger-active');
        main.classList.toggle('main-active');
    });

    // End toggle hamburger button

    //Spy menu start

    const makeNavLinksSmooth = () => {
        const navLinks = document.querySelectorAll('.menu-item-link');
        for(let n in navLinks) {
            if(navLinks.hasOwnProperty(n)) {
                navLinks[n].addEventListener('click', e => {
                    e.preventDefault();
                    const el = document.querySelector(navLinks[n].hash);
                    const scrolTo = el.offsetTop-100;
                    window.scrollTo(0, scrolTo);
                });
            }
        }
    }
    const spyScrolling = () => {
        const sections = document.querySelectorAll('section');
        window.onscroll = () => {
            const scrollPos = document.documentElement.scrollTop || document.body.scrollTop;
            for(let s in sections)
                if(sections.hasOwnProperty(s) && sections[s].offsetTop-350 <= scrollPos ) {
                    const id = sections[s].id;
                    document.querySelector('.menu-item-active').classList.remove('menu-item-active');
                    document.querySelector(`a[href*=${ id }]`).parentNode.classList.add('menu-item-active');
                }
        } 
    }
    makeNavLinksSmooth();
    spyScrolling();

    //Spy menu end

    //Sticky menu start
    const mainMenu = document.querySelector("#top");
    let sticky = mainMenu.offsetTop;
    window.addEventListener("scroll", ()=>{
        if (window.pageYOffset > sticky) {
            mainMenu.classList.add("sticky")
        } else {
            mainMenu.classList.remove("sticky");
        }
    });
    //Sticky menu end

    //Counter start
    const animateCounter = (item, index) => {
        let how = item.getAttribute('data-counter');
        let current = 0;
        let stepTime = Math.abs(Math.floor(1500 / how));
        let timer = setInterval(()=>{
            current++;
            item.innerHTML=current;
            if(current == how) {
                clearInterval(timer);
            }
        }, stepTime);
    };
    //Counter end

    
    //Hide elements for animated
    const elementAnimate = document.querySelectorAll(".animated");
    elementAnimate.forEach((el, index)=>{
        el.classList.add('hide');
    });

    //Funkcja która sprawdza czy element jest w viewporcie 
    var isInViewport = function (elem) {
        var bounding = elem.getBoundingClientRect(); 
        return (
        bounding.top >= 0 &&
        bounding.left >= 0 &&
        bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    function addAnimation(el) {
        if (isInViewport(el)) {
            const animate = el.getAttribute('data-animate');
            el.classList.add(animate);
            el.classList.add("show");
            el.classList.remove("hide");
        }
    }

    //Pobieram animacje przypisane do elementów i zapisuje je do zmienej animate
    window.addEventListener('scroll', ()=> {
        elementAnimate.forEach((el)=>{
        setTimeout(addAnimation(el), 100000);
        });
    });

    //Slider start

    const mySiema = new Siema({
        loop: true,
        perPage: {
          450: 2,
          768: 3,
        },
      });

      const prev = document.querySelector('.prev');
      const next = document.querySelector('.next');
      
      prev.addEventListener('click', () => mySiema.prev());
      next.addEventListener('click', () => mySiema.next());

    //Slider end

    // Check are section counter is in view port - start 

    const countersAnimated = document.querySelectorAll('.counter');
    function runCounter() {
        if(isInViewport(countersAnimated[0])) {
            const counter = document.querySelectorAll(".counter-item");
            counter.forEach(animateCounter);
            window.removeEventListener('scroll', runCounter);
        }
    };
    
    window.addEventListener('scroll', runCounter);
    
    // Check are section counter is in view port - end 
});





