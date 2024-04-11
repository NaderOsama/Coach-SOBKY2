// Function to play the video after 5 seconds
function playVideo() {
  var video = document.querySelector(".home-video");
  if (video) {
    // Wait for 5 seconds before playing
    setTimeout(function () {
      video.contentWindow.postMessage(
        '{"event":"command","func":"playVideo","args":""}',
        "*"
      );
    }, 5000); // 5000 milliseconds = 5 seconds
  }
}

// Call the playVideo function when the page loads
window.onload = playVideo;


// Get the WhatsApp link element
const whatsappLink = document.getElementById("whatsappLink");

// Add an event listener to navigate to WhatsApp chat when clicked
whatsappLink.addEventListener("click", function (event) {
  event.preventDefault(); // Prevent default link behavior

  // Get phone number and message from data attributes
  const phoneNumber = whatsappLink.getAttribute("data-phone");
  const message = whatsappLink.getAttribute("data-message");

  // Construct the WhatsApp URL
  const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(
    message
  )}`;

  // Navigate to WhatsApp chat
  window.open(whatsappURL, "_blank");
});

function whatsappCall() {
  // Get phone number and message from data attributes
  const phoneNumber = whatsappLink.getAttribute("data-phone");
  const message = whatsappLink.getAttribute("data-message");

  // Construct the WhatsApp URL
  const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(
    message
  )}`;

  // Navigate to WhatsApp chat
  window.open(whatsappURL, "_blank");
}


function showPriceDetailsGolden(months) {
  var priceBeforeDiscount;
  var discountedPrice;

  // Calculate prices based on the selected duration for the golden package
  if (months === 3) {
    priceBeforeDiscount = 1800;
    discountedPrice = 1500;
  } else if (months === 6) {
    priceBeforeDiscount = 2800;
    discountedPrice = 2200;
  } else if (months === 9) {
    priceBeforeDiscount = 4200;
    discountedPrice = 3300;
  }

  // Format price details
  var priceDetails = `
    <h2 class="price-before-discount">${priceBeforeDiscount}EGP</h2>
    <h2 class="discounted-price">${discountedPrice}EGP</h2>
  `;

  // Display price details for the golden package
  document.getElementById("priceDetailsGolden").innerHTML = priceDetails;

  // Remove "active" class from all buttons for the golden package
  var buttons = document.querySelectorAll('[data-package="golden"]');
  buttons.forEach(function (button) {
    button.classList.remove("active");
  });

  // Add "active" class to the clicked button for the golden package
  var activeButton = document.querySelector(
    '.mounthlyBtn[data-months="' + months + '"][data-package="golden"]'
  );
  if (activeButton) {
    activeButton.classList.add("active");
  }
}

function showPriceDetailsPlatinum(months) {
  var priceBeforeDiscount;
  var discountedPrice;

  // Calculate prices based on the selected duration for the platinum package
  if (months === 3) {
    priceBeforeDiscount = 2600;
    discountedPrice = 2300;
  } else if (months === 6) {
    priceBeforeDiscount = 3600;
    discountedPrice = 3000;
  } else if (months === 9) {
    priceBeforeDiscount = 5000;
    discountedPrice = 4100;
  }

  // Format price details
  var priceDetails = `
    <h2 class="price-before-discount">${priceBeforeDiscount}EGP</h2>
    <h2 class="discounted-price">${discountedPrice}EGP</h2>
  `;

  // Display price details for the platinum package
  document.getElementById("priceDetailsPlatinum").innerHTML = priceDetails;

  // Remove "active" class from all buttons for the platinum package
  var buttons = document.querySelectorAll('[data-package="platinum"]');
  buttons.forEach(function (button) {
    button.classList.remove("active");
  });

  // Add "active" class to the clicked button for the platinum package
  var activeButton = document.querySelector(
    '.mounthlyBtn[data-months="' + months + '"][data-package="platinum"]'
  );
  if (activeButton) {
    activeButton.classList.add("active");
  }
}

function showPriceDetailsVip(months) {
  var priceBeforeDiscount;
  var discountedPrice;

  // Calculate prices based on the selected duration for the platinum package
  if (months === 3) {
    discountedPrice = 3000;
  } else if (months === 6) {
    discountedPrice = 5000;
  } else if (months === 9) {
    discountedPrice = 7000;
  }

  // Format price details
  var priceDetails = `
    <h2 class="discounted-price">${discountedPrice}EGP</h2>
  `;

  // Display price details for the platinum package
  document.getElementById("priceDetailsVip").innerHTML = priceDetails;

  // Remove "active" class from all buttons for the platinum package
  var buttons = document.querySelectorAll('[data-package="vip"]');
  buttons.forEach(function (button) {
    button.classList.remove("active");
  });

  // Add "active" class to the clicked button for the platinum package
  var activeButton = document.querySelector(
    '.mounthlyBtn[data-months="' + months + '"][data-package="vip"]'
  );
  if (activeButton) {
    activeButton.classList.add("active");
  }
}

// Set initial state to show price details for 3 months
showPriceDetailsGolden(3);
showPriceDetailsPlatinum(3);
showPriceDetailsVip(3);

function scrollToPackage() {
    var packageSection = document.getElementById("subscribe");
    packageSection.scrollIntoView({ behavior: "smooth" });
}

// Set the date for the countdown
// var countdownDate = new Date("April 1, 2024 00:00:00").getTime();

// Update the countdown every second
// var countdownFunction = setInterval(function () {
//   var now = new Date().getTime();
//   var distance = countdownDate - now;

//   // Calculations for days, hours, minutes, and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the countdown in the "countdown" element
//   document.getElementById("countdown").innerHTML =
//     days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

//   // If the countdown is over, display a message
//   if (distance < 0) {
//     clearInterval(countdownFunction);
//     document.getElementById("countdown").innerHTML = "EXPIRED";
//   }
// }, 1000);

// Function to hide an element with fade animation
// function fadeOutElement(elementId) {
//   var element = document.getElementById(elementId);
//   var opacity = 1;

//   var fadeOutInterval = setInterval(function () {
//     if (opacity > 0) {
//       opacity -= 0.1;
//       element.style.opacity = opacity;
//     } else {
//       clearInterval(fadeOutInterval);
//       element.style.display = "none"; // Hide the element after fading out
//     }
//   }, 3000);
// }

// Function to show an element with fade animation every 1 minute
// function fadeInElementEveryMinute(elementId) {
//   var element = document.getElementById(elementId);
//   var opacity = 0;

//   // Set initial opacity and display
//   element.style.opacity = opacity;
//   element.style.display = "block";

//   setInterval(function () {
//     fadeOutElement(elementId); // Fade out the element
//     setTimeout(function () {
//       // Fade in the element after a delay
//       var fadeInInterval = setInterval(function () {
//         if (opacity < 1) {
//           opacity += 0.1;
//           element.style.opacity = opacity;
//         } else {
//           clearInterval(fadeInInterval);
//         }
//       }, 0);
//       element.style.display = "block"; // Ensure the element is displayed
//     }, 0); // 1 second delay before fading in
//   }, 9000); // Repeat every 1 minute (60,000 milliseconds)
// }

// fadeInElementEveryMinute("countdown");
