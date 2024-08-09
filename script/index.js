try {
  const buttonHamburger = document.querySelector(".hamburger-button");
  const mobileNavbar = document.querySelector(".mobile-navbar");
  const mobileOverlay = document.querySelector(".overlay-mobile");
  const header = document.querySelector("header");

  buttonHamburger.addEventListener("click", () => {
    buttonHamburger.classList.toggle("open");
    mobileNavbar.classList.toggle("open");
    mobileOverlay.classList.toggle("open");
    header.classList.toggle("open");
  });

  mobileOverlay.addEventListener("click", () => {
    buttonHamburger.classList.toggle("open");
    mobileNavbar.classList.toggle("open");
    mobileOverlay.classList.toggle("open");
    header.classList.toggle("open");
  });
} catch (error) { }

try {
  /**********************/
  /**** accordion ***/
  /**********************/
  const acc = document.getElementsByClassName("accordion");

  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const panel = this.nextElementSibling;
      this.classList.toggle("active");
      panel.style.height =
        panel.style.height === panel.scrollHeight + "px"
          ? "0"
          : panel.scrollHeight + "px";

      for (let j = 0; j < acc.length; j++) {
        if (this !== acc[j]) {
          acc[j].classList.remove("active");
          acc[j].nextElementSibling.style.height = "0";
        }
      }
    });
  }
} catch (error) { }

try {
  var swiper = new Swiper(".mySwiper-projects", {
    loop: true,
    watchOverflow: true,
    navigation: {
      nextEl: ".swiper-button-next-custom",
      prevEl: ".swiper-button-prev-custom",
    },
  });
} catch (error) { }

/**********************/
/*** Hide Menu on Scroll ***/
/**********************/
try {
  let prevScrollpos = window.pageYOffset;
  window.addEventListener("scroll", () => {
    let currentScrollPos = window.pageYOffset;
    const scrollpos = window.scrollY;
    if (prevScrollpos > currentScrollPos) {
      document.querySelector("header").style.top = "0px";
    } else if (scrollpos > 200) {
      document.querySelector("header").style.top = "-200px";
    }
    prevScrollpos = currentScrollPos;
  });
} catch (error) { }

try {
  var swiper = new Swiper(".mySwiper-inner-block", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 50,
      },
    },
  });
} catch (error) { }

try {
  const modal = document.getElementById("myModal");

  const modalImg = document.getElementById("img01");
  const captionText = document.getElementById("caption");
  const images = document.getElementsByClassName("modal-image");

  for (let i = 0; i < images.length; i++) {
    let img = images[i];
    img.onclick = function () {
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    };
  }

  const span = document.getElementsByClassName("close")[0];

  span.onclick = function () {
    modal.style.display = "none";
  };

  modal.onclick = function () {
    modal.style.display = "none";
  };
} catch (error) { }




try {
  const buttonClosePopUp = document.querySelector(".closePopUp");
  const popUp = document.querySelector(".pop_up");

  const closePopupAndSetCookie = () => {
    let date = new Date();
    date.setDate(date.getDate() + 7);
    document.cookie = "popup=yes; expires=" + date.toUTCString() + ";";
    popUp.classList.add("hidden");
  };

  buttonClosePopUp.addEventListener("click", closePopupAndSetCookie);
  popUp.addEventListener("click", closePopupAndSetCookie);
} catch (error) { }