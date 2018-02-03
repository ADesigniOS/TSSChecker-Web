function preloader() {
  var preloader = document.getElementById("preloader");
  preloader.style.opacity = "0";
  preloader.setAttribute("aria-busy", "false");
  document.getElementById("site").style.opacity = "1";
}
window.onload = preloader;

// Initialize your app
var myApp = new Framework7({
    modalTitle: 'TSSChecker',
     
    // If it is webapp, we can enable hash navigation:
    pushState: true,
 
    // Hide and show indicator during ajax requests
    onAjaxStart: function (xhr) {
        console.log('loading');
        setTimeout(myApp.showIndicator(), 1000);
    },
    onAjaxComplete: function (xhr) {
        myApp.hideIndicator();
    }

});

// Export selectors engine
var $$ = Dom7;

// Add view
var mainView = myApp.addView('.view-main', {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: true
});

