// login and signup functionality
const signUpButton = document.getElementById('SignUpButton');
const signInButton = document.getElementById('SignInButton');
const signinForm = document.getElementById('signIn');
const signupForm = document.getElementById('signUp');

// Check URL hash on page load
window.addEventListener('load', function () {
    const hash = window.location.hash;

    if (hash === '#signUp') {
        signinForm.style.display = 'none';
        signupForm.style.display = 'block';
    } else if (hash === '#signIn') {
        signupForm.style.display = 'none';
        signinForm.style.display = 'block';
    }
});

// Button click handlers
signUpButton.addEventListener('click', function () {
    signinForm.style.display = 'none';
    signupForm.style.display = 'block';
    window.location.hash = '#signUp';
});

signInButton.addEventListener('click', function () {
    signupForm.style.display = 'none';
    signinForm.style.display = 'block';
    window.location.hash = '#signIn';
});

// Login loader display (if it exists)
document.addEventListener('DOMContentLoaded', function () {
    const loader = document.getElementById('login-loader');
    if (loader && loader.style.display !== 'none') {
        loader.style.display = 'flex'; // show loader
        setTimeout(() => {
            window.location.href = "home.php";
        }, 4000);
    }
});
/* pages animation fade in */
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("fade-in-section");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");  // ✅ FIXED
        observer.unobserve(entry.target); // Optional: run only once
      }
    });
  }, {
    threshold: 0.1
  });

  sections.forEach(section => {
    observer.observe(section);
  });
});

