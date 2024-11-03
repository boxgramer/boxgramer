import.meta.glob([
    '../images/**'
])
import './bootstrap';

// Default theme
import '@splidejs/splide/css';


// or other themes
import '@splidejs/splide/css/skyblue';
import '@splidejs/splide/css/sea-green';


// or only core styles
import '@splidejs/splide/css/core';


import Splide from '@splidejs/splide';


var elms = document.getElementsByClassName( 'splide' );


for ( var i = 0; i < elms.length; i++ ) {
  new Splide( elms[ i ], {
    type    : 'loop',
    autoplay: 'pause',
    perPage : 3,
    focus: 'center',
    gap: 20,
    breakpoints: {
		640: {
			perPage: 1,
            gap: 5
		},
  }

  }  ).mount();
}
const tooltip = document.querySelector('.tooltip');
 tooltip.classList.add('show');
setInterval(() => {
    const tooltip = document.querySelector('.tooltip');
    tooltip.classList.add('show');
    
    // Hide tooltip after 3 seconds
    setTimeout(() => {
        tooltip.classList.remove('show');
    }, 3000);
}, 7000); // 