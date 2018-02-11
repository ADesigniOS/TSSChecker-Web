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


function saveBlobs(deviceID, version, boardconfig) {
  var deviceName = "";
  swal({
    text: 'Please put device name.',
    content: "input",
    button: {
      text: "Next!",
      closeModal: false,
    },
  })
  .then(name => {
    if (!name) throw null;
    deviceName = name;
    return name;
  })
  .then(results => {
    swal({
      text: `Please put device ECID for: ${deviceName}.`,
      content: "input",
      button: {
        text: "Next!",
        closeModal: false,
      },
    })
    .then(ecid => {
      if (!ecid) throw null;
      console.log(`internal_files/php/save.php?deviceName=${deviceName}&version=${version}&deviceID=${deviceID}&ecid=${ecid}&boardconfig=${boardconfig}`);
      return fetch(`internal_files/php/save.php?deviceName=${deviceName}&version=${version}&deviceID=${deviceID}&ecid=${ecid}&boardconfig=${boardconfig}`);
    })
    .then(result => {
      return result.text();
    })
    .then(saved => {
      console.log(saved);
      if (!saved) {
          return swal("Oops!", "Damn! An Error occured! Please try again later!", "error");
        }
      var results = saved.split("\n");
      if (results[0] == "status: success") {
        swal("Success!", saved, "success");
      } else {
        swal("Oops!", "We're sorry but an unknown error has occured!", "error");
      }
    })
    .catch(err => {
      if (err) {
        swal("Oops!", "The AJAX request failed!", "error");
      } else {
        swal.stopLoading();
        swal.close();
      }
    });
  });
}