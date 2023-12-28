


const counters = document.querySelectorAll(".counter");

window.addEventListener("scroll", styleNav);

document.addEventListener('DOMContentLoaded', () => {
    "use strict";
  
    
    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
      document.addEventListener('scroll', () => {
        window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
      });
    }
  
    /**
     * Mobile nav toggle
     */
    const mobileNavShow = document.querySelector('.mobile-nav-show');
    const mobileNavHide = document.querySelector('.mobile-nav-hide');
  
    document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
      el.addEventListener('click', function(event) {
        event.preventDefault();
        mobileNavToogle();
      })
    });
  
    function mobileNavToogle() {
      document.querySelector('body').classList.toggle('mobile-nav-active');
      mobileNavShow.classList.toggle('d-none');
      mobileNavHide.classList.toggle('d-none');
    }
  
    /**
     * Toggle mobile nav dropdowns
     */
    const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');
  
    navDropdowns.forEach(el => {
      el.addEventListener('click', function(event) {
        if (document.querySelector('.mobile-nav-active')) {
          event.preventDefault();
          this.classList.toggle('active');
          this.nextElementSibling.classList.toggle('dropdown-active');
  
          let dropDownIndicator = this.querySelector('.dropdown-indicator');
          dropDownIndicator.classList.toggle('bi-chevron-up');
          dropDownIndicator.classList.toggle('bi-chevron-down');
        }
      })
    });
  
    /**
     * Scroll top button
     */
    const scrollTop = document.querySelector('.scroll-top');
    if (scrollTop) {
      const togglescrollTop = function() {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
      window.addEventListener('load', togglescrollTop);
      document.addEventListener('scroll', togglescrollTop);
      scrollTop.addEventListener('click', window.scrollTo({
        top: 0,
        behavior: 'smooth'
      }));
    }
  
    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
      selector: '.glightbox'
    });
  
    /**
     * Init swiper slider with 1 slide at once in desktop view
     */
    new Swiper('.slides-1', {
      speed: 600,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  
    /**
     * Init swiper slider with 3 slides at once in desktop view
     */
    new Swiper('.slides-3', {
      speed: 600,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      slidesPerView: 'auto',
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 40
        },
  
        1200: {
          slidesPerView: 3,
        }
      }
    });
  
    /**
     * Porfolio isotope and filter
     */
    let portfolionIsotope = document.querySelector('.portfolio-isotope');
  
    if (portfolionIsotope) {
  
      let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
      let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
      let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';
  
      window.addEventListener('load', () => {
        let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
          itemSelector: '.portfolio-item',
          layoutMode: portfolioLayout,
          filter: portfolioFilter,
          sortBy: portfolioSort
        });
  
        let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
        menuFilters.forEach(function(el) {
          el.addEventListener('click', function() {
            document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
            this.classList.add('filter-active');
            portfolioIsotope.arrange({
              filter: this.getAttribute('data-filter')
            });
            if (typeof aos_init === 'function') {
              aos_init();
            }
          }, false);
        });
  
      });
  
    }
  
    /**
     * Animation on scroll function and init
     */
    function aos_init() {
      AOS.init({
        duration: 800,
        easing: 'slide',
        once: true,
        mirror: false
      });
    }
    window.addEventListener('load', () => {
      aos_init();
    });
  
  });

function styleNav()
{
    // Adding styles to navbar while scroll
    document.querySelector("header").classList.toggle("nav-scroll", window.scrollY > 0);
    
    // Animation Counter
    if(window.scrollY > 0)
    {
        counters.forEach(counter => {
            let target = +counter.dataset.target;
            let step = 100;
            let dec = parseInt((999 - target) / step);
            
            function updateCount()
            {
                const curr = +counter.innerText;
                if(curr > target)
                {
                    counter.innerText = curr - dec;
                    setTimeout(updateCount, 5);
                }
                else counter.innerText = target;
            }
            setTimeout(updateCount,900);
        })
        
    }
}

// Routes 

// Selecting all search boxes
const searchBox  = document.querySelectorAll(".searchQuery");
const routeForm = document.querySelector("#route-search-form");

const stateEndpoint = "https://raw.githubusercontent.com/hiiamrohit/Countries-States-Cities-database/master/states.json";
const cityEndpoint = "https://raw.githubusercontent.com/ASHWIN776/Countries-States-Cities-database/master/indiaCities.json";

let stateData;
let cityData;
let stateId;

async function getStatesData()
{
    try{
        const response = await fetch(stateEndpoint);
        stateData = await response.json();
        stateData = stateData.states;
        stateData = stateData.filter(({country_id}) => country_id === "101");
    }
    catch(e)
    {
        console.log("Data cannot be extracted", e);
    }
}

async function getCitiesData()
{
    try{
        const response = await fetch(cityEndpoint);
        cityData = await response.json();
        cityData = cityData.cities;
    }
    catch(e)
    {
        console.log("Data cannot be extracted", e);
    }
}

getStatesData();
getCitiesData();




routeForm.addEventListener("click", searchForms);

function searchForms(evt)
{
    let showSuggestions;
    if(evt.target.className.includes("searchInput"))
    {
        const searchInput = evt.target;
        const id = evt.target.id;
        const suggBox = searchInput.nextElementSibling;

        switch(id)
        {
            case "source_state": showSuggestions = showStates;
            break;

            case "source": showSuggestions = showCities;
            break;

            case "destination_state": showSuggestions = showStates;
            break;

            case "destination": showSuggestions = showCities;
        }

        searchInput.addEventListener("input", showSuggestions);

        suggBox.addEventListener("click", selectSuggestion);
    }
}


function showStates()
{

    const word = this.value;
    const regex = new RegExp( word ,"gi");
    const suggBox = this.nextElementSibling;

    if(!word){
        suggBox.innerHTML = "";
        return;
    }

    let suggestions = stateData.filter(({name}) => name.match(regex))
    .map(({name:state, id}) => {
        const stateName = state.replace(regex, `<span class="hl">${word}</span>`)
        return `<li data-id="${id}">${stateName}</li>`;
    })
    .join("");

    suggBox.innerHTML = suggestions;
    
}

function showCities()
{   
    console.log("Cities Input clicked");
    
    const word = this.value;
    const regex = new RegExp( word ,"gi");
    const suggBox = this.nextElementSibling;

    if(!word){
        suggBox.innerHTML = "";
        return;
    }

    let suggestions = cityData.filter(({name}) => name.match(regex))
    .map(({name:city, id}) => {
        const cityName =  city.replace(regex, `<span class="hl">${word}</span>`)
        return `<li data-id="${id}">${cityName}</li>`;
    })
    .join("");

    suggBox.innerHTML = suggestions;
    suggBox.addEventListener("click", selectSuggestion)
}


function selectSuggestion(evt)
{
    if(evt.target.nodeName === "LI")
    {   
        console.dir(evt.target);
        this.previousElementSibling.value = evt.target.innerText;

        this.innerHTML = "";


        if(this.previousElementSibling.id === "destination_state" || this.previousElementSibling.id === "source_state")
        {   
            stateId = evt.target.dataset.id;
            console.log(stateId);
            cityData = cityData.filter(({state_id}) => state_id === stateId);
            console.log(cityData);
        }
    }
}

// Booking Deletion
const deleteBtn = document.querySelector("#deleteBooking");

if(deleteBtn)
{
    deleteBtn.addEventListener("click", deleteBooking);
}

const deleteForm = document.querySelector("#delete-form");

function deleteBooking()
{
    deleteForm.elements.id.value = this.dataset.pnr;
    deleteForm.elements.booked_seat.value = this.dataset.seat;
    deleteForm.elements.bus.value = this.dataset.bus;
}


/**
     * Preloader
     */
const preloader = document.querySelector('#preloader');
if (preloader) {
  window.addEventListener('load', () => {
    preloader.remove();
  });
}
