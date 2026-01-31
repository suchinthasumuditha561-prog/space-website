// File: js/script.js

// 1. Navbar scroll effect
window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    if(window.scrollY > 50){
        nav.style.backgroundColor = "rgba(0,0,0,0.9)";
        nav.style.boxShadow = "0 4px 6px rgba(0,0,0,0.3)";
    } else {
        nav.style.backgroundColor = "#111";
        nav.style.boxShadow = "none";
    }
});

// 2. Smooth scroll for anchor links
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e){
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if(target){
            target.scrollIntoView({behavior: 'smooth'});
        }
    });
});

// 3. Planet & Mission hover effect (extra shadow)
const cards = document.querySelectorAll('.planet img');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.boxShadow = "0 10px 20px rgba(0,191,255,0.5)";
    });
    card.addEventListener('mouseleave', () => {
        card.style.boxShadow = "none";
    });
});

// 4. Comment form validation
const commentForm = document.querySelector('form');
if(commentForm){
    commentForm.addEventListener('submit', function(e){
        const name = this.querySelector('input[name="name"]').value.trim();
        const email = this.querySelector('input[name="email"]').value.trim();
        const message = this.querySelector('textarea[name="message"]').value.trim();

        if(name === "" || email === "" || message === ""){
            e.preventDefault();
            alert("Please fill all fields before submitting!");
        } else if(!email.includes("@")){
            e.preventDefault();
            alert("Please enter a valid email address!");
        }
    });
}

// 5. Hero typing effect
const heroText = document.querySelector('.hero h1');
if(heroText){
    let txt = "Welcome to Explore Space";
    let i = 0;
    heroText.textContent = "";
    function typeEffect(){
        if(i < txt.length){
            heroText.textContent += txt.charAt(i);
            i++;
            setTimeout(typeEffect, 100);
        }
    }
    typeEffect();
}

// 6. YouTube Icon Alert
const planetImages = document.querySelectorAll(".space-card a");

planetImages.forEach(img => {
    img.addEventListener("click", () => {
        console.log("Opening YouTube video...");
    });
});

// 7. Search Logic
const searchInput = document.getElementById("planetSearch");
const planetCards = document.querySelectorAll(".planet-card");

searchInput.addEventListener("keyup", () => {
    const value = searchInput.value.toLowerCase();

    planetCards.forEach(card => {
        const name = card.getAttribute("data-name");

        if (name.includes(value)) {
            card.style.display = "flex";
        } else {
            card.style.display = "none";
        }
    });
});
