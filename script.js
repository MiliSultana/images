


//for the navbar..
  const menuToggle = document.getElementById("menu-toggle");
  const menu = document.getElementById("menu");
  const hamburger = document.getElementById("hamburger");
  const closeIcon = document.getElementById("close");

  menuToggle.addEventListener("click", () => {
    menu.classList.toggle("hidden");   // show/hide menu
    hamburger.classList.toggle("hidden"); // swap icons
    closeIcon.classList.toggle("hidden");
  });


//step progress bar



//for the image and peragraph of 2nd page..
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.profile-card').forEach(card => {
        const toggleBtn = card.querySelector('.toggle-btn');
        const closeBtn = card.querySelector('.close-btn');
        const nameTitle = card.querySelector('.name-title');
        const footer = card.querySelector('.footer-section');
        const contentArea = card.querySelector('.content-area');
        const description = card.dataset.description;
        const originalImage = contentArea.innerHTML; // Save original image HTML

        toggleBtn.addEventListener('click', () => {
            nameTitle.classList.remove('hidden');
            closeBtn.classList.remove('hidden');
            footer.style.display = 'none';

            // Insert paragraph with transition styles
            contentArea.innerHTML = `
              <p style="
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.6s ease, transform 0.6s ease;
              " class="text-[14px] font-instrument-sans leading-[18px] tracking-[1px] text-[#424245] p-[16px]">
                ${description}
              </p>`;

            // Trigger the animation
            requestAnimationFrame(() => {
                const paragraph = contentArea.querySelector('p');
                paragraph.style.opacity = '1';
                paragraph.style.transform = 'translateY(0)';
            });
        });

closeBtn.addEventListener('click', () => {
            const paragraph = contentArea.querySelector('p');
            if (paragraph) {
                // Animate out
                paragraph.style.opacity = '0';
                paragraph.style.transform = 'translateY(20px)';

                setTimeout(() => {
                    contentArea.innerHTML = originalImage;
                    nameTitle.classList.add('hidden');
                    closeBtn.classList.add('hidden');
                    footer.style.display = 'flex';
                }, 300); // Match transition duration
            } else {
                // Fallback
                nameTitle.classList.add('hidden');
                closeBtn.classList.add('hidden');
                footer.style.display = 'flex';
                contentArea.innerHTML = originalImage;
            }
        });
    });
});


document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.profile-card');

  cards.forEach(card => {
    const contentArea = card.querySelector('.content-area');
    const image = contentArea.querySelector('img');
    const toggleBtn = card.querySelector('.toggle-btn img');

    // Ensure image container clips overflow (to prevent layout shift)
    contentArea.style.overflow = 'hidden';

    // Add smooth transition for image and button
    image.style.transition = 'transform 0.6s ease';
    toggleBtn.style.transition = 'transform 0.6s ease';

    // Add card shadow & slight lift on hover
    card.style.transition = 'box-shadow 0.6s ease, transform 0.6s ease';

    card.addEventListener('mouseenter', () => {
      image.style.transform = 'scale(1.05)';  // Zooms inside container
      card.style.boxShadow = '0 8px 24px rgba(0,0,0,0.1)';
      card.style.transform = 'translateY(-4px)';
    });

    card.addEventListener('mouseleave', () => {
      image.style.transform = 'scale(1)';
      card.style.boxShadow = 'none';
      card.style.transform = 'translateY(0)';
    });

    
  });
});



// catagory selection for the blog page..
  // Select all <a> links
  const links = document.querySelectorAll(".blogcatagory");

  links.forEach((link) => {
    link.addEventListener("click", (e) => {
     // e.preventDefault(); // prevent page reload (optional)

      // remove active class from all links
      links.forEach((l) => l.classList.remove("bg-black", "text-white"));

      // add active class to clicked one
      link.classList.add("bg-black", "text-white");
    });
  });


// box slider for the about us page..
 document.addEventListener('DOMContentLoaded', () => {
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 55,
    loop: true,
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 20 },
      768: { slidesPerView: 2, spaceBetween: 30 },
      1024: { slidesPerView: 4, spaceBetween: 55 },
    },
  });

  const prevBtn = document.getElementById("customPrev");
  const nextBtn = document.getElementById("customNext");
  const progressEl = document.getElementById("customProgress");

  if(prevBtn && nextBtn && progressEl) {
    prevBtn.addEventListener("click", () => swiper.slidePrev());
    nextBtn.addEventListener("click", () => swiper.slideNext());

    function updateProgress() {
      const totalSlides = swiper.slides.length - swiper.loopedSlides; // exclude loop duplicates
      const progress = (swiper.realIndex / totalSlides) * 100;
      progressEl.style.width = progress + "%";
    }

    swiper.on("slideChange", updateProgress);
    updateProgress();
  }
});

