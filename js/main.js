document.addEventListener('DOMContentLoaded', function(){
    if(document.querySelector('.hamburger-trigger')){
        const theSelector = document.querySelector('.hamburger-trigger')
        const languageDropdown = document.querySelector('.language-dropdown');
        const theFullScreenMenu = document.querySelector('.full-screen-menu');
        const serviceItem = document.querySelector('.service-dropdown');

     

        serviceItem.addEventListener('click',function(){
            serviceItem.classList.toggle('active-d-service')
            theSelector.classList.remove('active-hamburger')
        })

        serviceItem.querySelectorAll('#hash-link').forEach(link => link.onclick = () => {
            theSelector.classList.remove('active-hamburger');
            theFullScreenMenu.classList.remove('active-full-screen-menu');
        });

        theSelector.addEventListener('click', function(){
            if(theSelector.classList.contains('active-hamburger')){
                theSelector.classList.remove('active-hamburger');
                theFullScreenMenu.classList.remove('active-full-screen-menu')
            }else{
                theSelector.classList.add('active-hamburger')
                theFullScreenMenu.classList.add('active-full-screen-menu')
            }
        })

        languageDropdown.addEventListener('click', function(){
            if(languageDropdown.classList.contains('active-languages')){
                languageDropdown.classList.remove('active-languages')
            }else{
                languageDropdown.classList.add('active-languages')
            }
        })
    }

    if(document.querySelector('.dhembi-item')){
        const theSelector = document.querySelector('.dhembi-section');
        const theTeeth = document.querySelector('.dhembi-image');
     
        function checkDhembi(){
            const theSelectors = document.querySelectorAll('.dhembi-item')

            theSelectors.forEach((elem)=>{
                if(elem.getAttribute('data-target')!=0 && elem.classList.contains('active-item')){
                    elem.classList.remove('active-item');
                    theTeeth.style.transform="translate3d(0, 0px,0)";
                }
            })

            theSelectors.forEach((elem)=>{
                const attribute = elem.getAttribute('data-target');
                
                if(attribute==1){
                    setTimeout(()=>{
                        elem.classList.add('active-item')
                        theTeeth.style.transform="translate3d(0, -10px,0)";
                    },2000)

                    
                }

                if(attribute==2){
                    setTimeout(()=>{
                        elem.classList.add('active-item')
                        theTeeth.style.transform="translate3d(0, -20px,0)";
                    },4000)
                }

                if(attribute==3){
                    setTimeout(()=>{
                        elem.classList.add('active-item')
                        theTeeth.style.transform="translate3d(0, -30px,0)";
                    },6000)
                }
            })
        }

        let intervalId;

        function checkObserver(){

   

        const options = {
            root: null, // Use the viewport as the root
            rootMargin: '0px', // No margin
            threshold: 0 // 50% visibility threshold
          };

      
          
          // Create a new Intersection Observer
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              // When the target element intersects with the viewport
              if (entry.isIntersecting) {
         

                checkDhembi();
                if (intervalId) {
                    clearInterval(intervalId);
                }
            
               intervalId = setInterval(checkDhembi, 18000);
                // Unobserve the target element to stop further observations
                observer.unobserve(entry.target);
              }
            });
          }, options);

    

          observer.observe(theSelector);

        }

        checkObserver();
        
    }

    if(document.querySelector('.video-wrapper')){

        const theSelector = document.querySelector('.video-wrapper')
        
        const options = {
            root: null, // Use the viewport as the root
            rootMargin: '0px', // No margin
            threshold: 0 // 50% visibility threshold
          };

      
          
          // Create a new Intersection Observer
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              // When the target element intersects with the viewport
              if (entry.isIntersecting) {
                const video = entry.target.querySelector('video');
                video.play();
                // Unobserve the target element to stop further observations
                observer.unobserve(entry.target);
              }
            });
          }, options);

    

          observer.observe(theSelector);
    }

    if(document.querySelector('.client-swiper')){
        new Swiper('.client-swiper',{
            slidesPerView:1.2,
            centeredSlides:true,
            initialSlide:1,
            spaceBetween:20,
            speed:1000,
            navigation:{
                nextEl:'.next-btn',
                prevEl:'.prev-btn'
            },
       
            breakpoints:{
                992:{
                    slidesPerView:2.5,
                    spaceBetween:50,
                },
                1200:{
                    slidesPerView:2.7,
                    spaceBetween:100,
                },
                1400:{
                    slidesPerView:3,
                    spaceBetween:150
                },
                1600:{
                    slidesPerView:3,
                    spaceBetween:200
                },
                1800:{
                    slidesPerView:3,
                    spaceBetween:300
                }
            }
        })
    }

    if(document.querySelector('.history-slider')){
        const currentSlide = document.getElementById('count');
        new Swiper('.history-slider', {
            slidesPerView:1.2,
            spaceBetween:20,
            speed:1000,
            loop:true,
            breakpoints:{
                992:{
                    slidesPerView:1.53,
                    centeredSlides:true,
                    spaceBetween:25,
                    initialSlide:1
                }
            },
            autoplay:{
                delay:5000,
                disableOnInteraction:false
            },
            on:{
                slideChange:function(){
                    

                    currentSlide.textContent = this.activeIndex +1;
                }
            }
        })
    }

    if(document.querySelector('.p-about-dhembet-holder')){
        const theSelectors = document.querySelectorAll('.p-about-dhembet-single')

   
        
        const options = {
            root: null, // Use the viewport as the root
            rootMargin: '0px', // No margin
            threshold: 0 // 50% visibility threshold
          };

      
          
          // Create a new Intersection Observer
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              // When the target element intersects with the viewport
              if (entry.isIntersecting) {
                entry.target.classList.add('active-single-dhembi')
                // Unobserve the target element to stop further observations
                observer.unobserve(entry.target);
              }
            });
          }, options);

    

          theSelectors.forEach((elem)=>{
            observer.observe(elem);
          })
    }

    if(document.querySelector('.p-service-triggers-holder')){
        const theSelectors = document.querySelectorAll('.p-service-triggers-holder button');
        const theServices = document.querySelectorAll('.p-service-single-item')
        let windowHash = window.location.hash;
      

        if(window.location.hash!==""){
            let newHash = windowHash.split('#');
        
            theServices.forEach((elem)=>{
                let attribute = elem.getAttribute('data-id');
                if(attribute!==newHash[1] && elem.classList.contains('p-service-active-item')){
                    elem.classList.remove('p-service-active-item')
                }else if(attribute===newHash[1]){
                    elem.classList.add('p-service-active-item')
                }
            })

            theSelectors.forEach((elem)=>{
                let attribute = elem.getAttribute('data-id');
                if(attribute!==newHash[1] && elem.classList.contains('active-s-sherbim')){
                    elem.classList.remove('active-s-sherbim')
                }else if(attribute===newHash[1]){
                    elem.classList.add('active-s-sherbim')
                }
            })
        }

        window.addEventListener('hashchange', function() {
            // Get the new hash value (excluding the '#' character)
            let newHash = window.location.hash.split('#');
        
            theServices.forEach((elem)=>{
                let attribute = elem.getAttribute('data-id');
                if(attribute!==newHash[1] && elem.classList.contains('p-service-active-item')){
                    elem.classList.remove('p-service-active-item')
                }else if(attribute===newHash[1]){
                    elem.classList.add('p-service-active-item')
                }
            })

            theSelectors.forEach((elem)=>{
                let attribute = elem.getAttribute('data-id');
                if(attribute!==newHash[1] && elem.classList.contains('active-s-sherbim')){
                    elem.classList.remove('active-s-sherbim')
                }else if(attribute===newHash[1]){
                    elem.classList.add('active-s-sherbim')
                }
            })
          });

        theSelectors.forEach((elem)=>{
            elem.addEventListener('click', function(){
                const attribute = elem.getAttribute('data-target');
                theSelectors.forEach((ele)=>{
                    if(ele.classList.contains('active-s-sherbim') && ele.getAttribute('data-target')!==attribute){
                        ele.classList.remove('active-s-sherbim')
                    }else if(elem===ele){
                        elem.classList.add('active-s-sherbim')
                    }
                })

                theServices.forEach((el)=>{
                    if(el.classList.contains('p-service-active-item') && el.getAttribute('data-target')!==attribute){
                        el.classList.remove('p-service-active-item')
                    }else if(el.getAttribute('data-target')===attribute){
                        el.classList.add('p-service-active-item')
                    }
                })
            })
        })
    }

    if(document.querySelectorAll('.p-service-single-question')){
        const theSelectors = document.querySelectorAll('.p-service-single-question');

        theSelectors.forEach((elem)=>{
            const theTitles = elem.querySelector('.p-service-single-question-title');
            // console.log(theTitles.offsetHeight);

            elem.style.maxHeight=`${theTitles.offsetHeight}px`
            elem.setAttribute('data-previous', theTitles.offsetHeight);

            elem.addEventListener('click', function(){
    
                theSelectors.forEach((el)=>{
                    if(el.classList.contains('active-single-question') && el===elem){
                        el.classList.remove('active-single-question')
                    }else if(el===elem){
                        el.classList.add('active-single-question')
                    }
                })
            })
        })


    }

    if(document.querySelector('.dropdown-title')){
        const theTrigger = document.querySelector('.dropdown-title');
        const theBox = document.querySelector('.dropdown-box');
        const theButtons = document.querySelectorAll('.dropdown-box button')
        const theServices = document.querySelectorAll('.p-pacientet-single-sherbim ');

        let windowHash = window.location.hash;
        theTrigger.addEventListener('click', function(){
            if(theBox.classList.contains('active-dropdown-box')){
                theBox.classList.remove('active-dropdown-box')
            }else{
                theBox.classList.add('active-dropdown-box')
            }
        });

        const cleanBtnId = windowHash.replace('#', '');
        const hashMatchBtnService = document.getElementById('service-btn-target-' + cleanBtnId);

        function showService(elem){
            if(('target' in elem)) {
                elem = elem.target.value;
            }

            const attribute = elem.getAttribute('data-target');

            if(theBox.classList.contains('active-dropdown-box')){
                theBox.classList.remove('active-dropdown-box')
            }else{
                theBox.classList.add('active-dropdown-box')
            }

            theButtons.forEach((ele)=>{
                if(ele.classList.contains('active-s-service-button') && ele!==elem){
                    ele.classList.remove('active-s-service-button')
                }else if(ele===elem){
                    ele.classList.add('active-s-service-button')
                }
            })

            theServices.forEach((el)=>{
                if(el.classList.contains('active-pacientet-sherbim') && el.getAttribute('data-id')!==attribute){
                    el.classList.remove('active-pacientet-sherbim')
                }else if(el.getAttribute('data-id')===attribute){
                    el.classList.add('active-pacientet-sherbim');
                }
            })
        }

        theButtons.forEach((elem)=>{
            elem.addEventListener('click', showService.bind(null, elem));
        });

        hashMatchBtnService?.click();

        const loadMoreBtns = document.querySelectorAll('.load-more-button button');

        loadMoreBtns.forEach((elem)=>{
            elem.addEventListener('click', function(){
                let id = elem.getAttribute('data-target')
                let current_index = elem.getAttribute('data-index');
                let count = elem.getAttribute('data-count');
                elem.style.display="none";
                fetch('/wp-admin/admin-ajax.php', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                    },
                    body: 'action=weichie_load_more2&paged=' + current_index +  '&id=' + id + '&count=' + count
                  })
                    .then(function(response) {
                      if (!response.ok) {
                     
                        throw new Error('Network response was not ok');
                      }
                      return response.json();
                    })
                    .then(function(res) {
               
                      if (parseInt(elem.getAttribute('data-index') +1)*6 >= res.max) {
                        elem.style.display = "none";
                      } else {
                        elem.style.display = "flex";
                        elem.setAttribute('data-index', parseInt(current_index)+1)
                      }
                  
                      document.querySelector(`.a${id}`).insertAdjacentHTML('beforeend', res.html);
                    })
                    .catch(function(error) {
                      console.error('There was a problem with the fetch operation:', error.message);
                    });
            })
        })
    }

    if(document.querySelector('.ekipa-container')){
        const theSelector = document.querySelector('.ekipa-container')
        const options = {
            root: null, // Use the viewport as the root
            rootMargin: '0px', // No margin
            threshold: 0.5 // 50% visibility threshold
          };

      
          
          // Create a new Intersection Observer
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              // When the target element intersects with the viewport
              if (entry.isIntersecting) {
                const members = entry.target.querySelectorAll('.member');
                members.forEach((elem)=>{
                    elem.classList.add('active-member');
                })
     
                observer.unobserve(entry.target);
              }
            });
          }, options);

    

          observer.observe(theSelector);
    }

    if(document.body.className.includes('page-template-page-kontakt')) {
        const locationHash = window.location.hash;
        if(locationHash.trim().length > 0) {
            let serviceName = locationHash.replace('#', '');
    
           
            const selectWrapper = document.querySelector('[data-name="your-sherbim"]');
            const selectService = selectWrapper.querySelector('select');
            const currentServicesList = Array.from(selectService.children).map(item => item.value.toLowerCase().replace(' ', '-')).slice(1);
            console.log(currentServicesList);
            if(currentServicesList.includes(serviceName)) {
                const serviceIndex = currentServicesList.findIndex(item => item === serviceName);
                selectService.children[serviceIndex + 1].selected = true;
            }
        }
    }


    if(document.querySelector('.animation-trigger')){
        const theAnimationTrigger = document.querySelectorAll('.animation-trigger');

        const options = {
            root: null, // Use the viewport as the root
            rootMargin: '0px', // No margin
            threshold: 0.5 // 50% visibility threshold
          };

          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              // When the target element intersects with the viewport
              if (entry.isIntersecting) {
                const theAnimationsHolder = entry.target.querySelector('.animated-items-holder');
                theAnimationsHolder.classList.add('active-first-animation')

                setTimeout(()=>{
                    theAnimationsHolder.classList.add('active-second-animation')
                },500)

                setTimeout(()=>{
                    theAnimationsHolder.classList.add('active-third-animation') 
                },1000)
     
                observer.unobserve(entry.target);
              }
            });
          }, options);

          theAnimationTrigger.forEach((elem)=>{
            observer.observe(elem);
          })
          
        
    }
})
