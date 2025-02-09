<!--     JQuery     -->
<script src="{{asset('home/js/vendors/jquery-3.6.1.min.js')}}"></script>
        
<!--     appear     -->
<script src="{{asset('home/js/vendors/appear.min.js')}}"></script>

<!--     bootstrap     -->
<script src="{{asset('home/js/vendors/bootstrap.bundle.min.js')}}"></script>

<!--     countTo     -->
<script src="{{asset('home/js/vendors/jquery.countTo.js')}}"></script>

<!--     wow     -->
<script src="{{asset('home/js/vendors/wow.min.js')}}"></script>

<!--     swiper     -->
<script src="{{asset('home/js/vendors/swiper-bundle.min.js')}}"></script>

<!--     particles     -->
<script src="{{asset('home/js/vendors/particles.min.js')}}"></script>

<!--     Vanilla-tilt     -->
<script src="{{asset('home/js/vendors/vanilla-tilt.min.js')}}"></script>

<!--     isotope     -->
<script src="{{asset('home/js/vendors/isotope-min.js')}}"></script>

<!--     fancybox     -->
<script src="{{asset('home/js/vendors/jquery.fancybox.min.js')}}"></script>

<!--     main     -->
<script src="{{asset('home/js/main.js')}}"></script>


<script src="{{asset('home/js/code.jquery.com_jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('home/js/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_js_bootstrap.bundle.min.js')}}"></script>

<!-- dropdown service change -->
<script>
// Define variables for the dropdown and trigger element
const dropdown = document.querySelector('.has-custom-sub-menu .custom-sub-menu');
const triggerElement = document.querySelector('.has-custom-sub-menu');

let timeoutId;

// Show the dropdown when the trigger element is hovered
triggerElement.addEventListener('mouseenter', () => {
  clearTimeout(timeoutId); // Clear any previously set timeout
  timeoutId = setTimeout(() => {
    dropdown.style.visibility = 'visible';
    dropdown.style.opacity = '1';
    dropdown.style.transition = 'opacity 1s';
  }, 800); // 1000 milliseconds = 1 second
});

// Hide the dropdown after a delay when the mouse leaves the trigger element and the dropdown
triggerElement.addEventListener('mouseleave', () => {
  clearTimeout(timeoutId); // Clear any previously set timeout
  dropdown.style.transition = 'opacity 1s'; // Add transition for opacity
  dropdown.style.opacity = '1'; // Set opacity to 1 to keep it visible for 2 seconds
  timeoutId = setTimeout(() => {
    dropdown.style.opacity = '0'; // Start the transition by setting opacity to 0
    setTimeout(() => {
      dropdown.style.visibility = 'hidden'; // Set visibility to hidden after the transition completes
    }, 1000); // Wait for the transition duration before hiding the dropdown
  }, 2000); // 1.5 seconds
});

</script>