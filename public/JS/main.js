let scrollTop = document.querySelector(".scroll-top");

function toggleScrollTop() {
    if (scrollTop) {
        window.scrollY > 100
            ? scrollTop.classList.add("active")
            : scrollTop.classList.remove("active");
    }
}
scrollTop.addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});

window.addEventListener("load", toggleScrollTop);
document.addEventListener("scroll", toggleScrollTop);
/**Slider image*/

document.addEventListener("DOMContentLoaded", () => {
    const downloadBtn = document.getElementById("downloadBtn");
    const registerBtn = document.getElementById("registerBtn");
    const downloginBtn = document.getElementById("downloginBtn");

    downloadBtn.addEventListener("click", () => {
        const downloadModal = new bootstrap.Modal(
            document.getElementById("downloadModal")
        );
        downloadModal.show();
    });

    registerBtn.addEventListener("click", () => {
        const registerModal = new bootstrap.Modal(
            document.getElementById("registerModal")
        );
        registerModal.show();
    });

    downloginBtn.addEventListener("click", () => {
        const loginModal = new bootstrap.Modal(
            document.getElementById("loginModal")
        );
        loginModal.show();
    });
});

// function changeImage() {
//   var image = document.getElementById('myImage');
//   if (image.src.match("bulbon")) {
//     image.src = "ekimage/image/light-bulb.png";
//   } else {
//     image.src = "ekimage/image/vision.png";
//   }
// }

$(window).load(function () {
    // Preloader
    $(".loader").fadeOut();
    $(".loader-mask").delay(500).fadeOut("slow");
});

// Ekana Technology js loader
window.addEventListener("load", function () {
    let loader = document.getElementById("loader");
    let content = document.getElementById("content");
    // check if the loader element has been found
    if (loader) {
        setTimeout(function () {
            loader.style.display = "none";
            // check if the content element has been found
            if (content) {
                content.style.display = "block";
            }
        }, 3000); // Adjust the timing as needed
    } else {
        console.error("loader element not found");
    }
});

//  Count Number Animation in js About_us
document.querySelectorAll(".counter").forEach((counter) => {
    const endCount = parseInt(counter.getAttribute("data-end-count"), 10);
    const duration = 5000; // Duration of the animation in milliseconds (5 seconds)
    const startCount = 0;
    let currentCount = startCount;

    const increment = (endCount - startCount) / (duration / 100);

    function updateCounter() {
        if (currentCount < endCount) {
            currentCount += increment;
            counter.innerText = Math.floor(currentCount) + "+";
        } else {
            counter.innerText = endCount + "+";
            clearInterval(counterInterval);
        }
    }

    const counterInterval = setInterval(updateCounter, 150);
});


// Loader ET
// Simulating loading
window.onload = function () {
    setTimeout(function () {
        document.querySelector(".loader-mask").style.display = "none";
        document.querySelector(".content").style.display = "block";
    }, 3000);
};
// Adjust the timeout as
