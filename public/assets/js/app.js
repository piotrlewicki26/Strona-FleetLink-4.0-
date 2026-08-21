/* ============================================================
   FleetLink 4.0 — Landing Page JS
   ============================================================ */

// ---- Current year ----
const yearEl = document.getElementById('currentYear');
if (yearEl) yearEl.textContent = new Date().getFullYear();

// ---- Navbar scroll shadow ----
const navbar = document.getElementById('navbar');
if (navbar) {
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });
}

// ---- Mobile burger menu ----
const burger   = document.getElementById('navBurger');
const navLinks = document.getElementById('navLinks');
if (burger && navLinks) {
  burger.addEventListener('click', () => {
    navLinks.classList.toggle('open');
    burger.setAttribute('aria-expanded', navLinks.classList.contains('open') ? 'true' : 'false');
  });
  // Close on non-dropdown link click
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      if (link.classList.contains('nav-has-sub')) return;
      navLinks.classList.remove('open');
      burger.setAttribute('aria-expanded', 'false');
    });
  });
}

// ---- Animated counter ----
function animateCounter(el) {
  const target = parseInt(el.dataset.target, 10);
  const duration = 1800;
  const step = Math.ceil(target / (duration / 16));
  let current = 0;

  const timer = setInterval(() => {
    current = Math.min(current + step, target);
    el.textContent = current.toLocaleString('pl-PL');
    if (current >= target) clearInterval(timer);
  }, 16);
}

// ---- Intersection Observer — fade-in + counters ----
const counters = document.querySelectorAll('.stat-num');
const fadeEls  = document.querySelectorAll('.fade-in');

let countersStarted = false;

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    if (entry.target.classList.contains('fade-in')) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.15 });

fadeEls.forEach(el => observer.observe(el));

// Counter observer — trigger when stats bar visible
const statsBar = document.querySelector('.stats-bar');
if (statsBar) {
  const statsObserver = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting && !countersStarted) {
      countersStarted = true;
      counters.forEach(animateCounter);
      statsObserver.disconnect();
    }
  }, { threshold: 0.4 });
  statsObserver.observe(statsBar);
}

// ---- Smooth scroll for anchor links ----
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', e => {
    const id = anchor.getAttribute('href').slice(1);
    const target = document.getElementById(id);
    if (!target) return;
    e.preventDefault();
    const offset = 70;
    const top = target.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top, behavior: 'smooth' });
  });
});

// ---- Contact form — sends data to /api/contact.php ----
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = contactForm.querySelector('[type="submit"]');
    const name  = contactForm.querySelector('[name="name"]').value.trim();
    const email = contactForm.querySelector('[name="email"]').value.trim();

    if (!name || !email) {
      alert('Proszę wypełnić wymagane pola (imię i e-mail).');
      return;
    }

    btn.disabled = true;
    btn.textContent = 'Wysyłanie…';

    const payload = {
      name,
      email,
      company:  (contactForm.querySelector('[name="company"]')  || {}).value || '',
      vehicles: (contactForm.querySelector('[name="vehicles"]') || {}).value || '',
      message:  (contactForm.querySelector('[name="message"]')  || {}).value || '',
    };

    fetch('/api/contact.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload),
    })
      .then(r => r.json())
      .then(data => {
        if (data.success) {
          btn.textContent = '✓ Wiadomość wysłana!';
          btn.style.background = '#16a34a';
          contactForm.reset();
        } else {
          btn.disabled = false;
          btn.textContent = 'Wyślij zapytanie';
          alert(data.error || 'Wystąpił błąd. Spróbuj ponownie.');
        }
      })
      .catch(() => {
        btn.disabled = false;
        btn.textContent = 'Wyślij zapytanie';
        alert('Błąd sieci. Sprawdź połączenie i spróbuj ponownie.');
      });
  });
}

// ---- Hero Slider ----
const slides = document.querySelectorAll('.hero-slide');
const dots   = document.querySelectorAll('.slider-dot');
const prevBtn = document.getElementById('sliderPrev');
const nextBtn = document.getElementById('sliderNext');
let currentSlide = 0;
let sliderInterval;

function goToSlide(n) {
  slides[currentSlide].classList.remove('active');
  dots[currentSlide].classList.remove('active');
  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].classList.add('active');
  dots[currentSlide].classList.add('active');
}

function startSlider() {
  sliderInterval = setInterval(() => goToSlide(currentSlide + 1), 6000);
}

if (slides.length) {
  if (prevBtn) prevBtn.addEventListener('click', () => { clearInterval(sliderInterval); goToSlide(currentSlide - 1); startSlider(); });
  if (nextBtn) nextBtn.addEventListener('click', () => { clearInterval(sliderInterval); goToSlide(currentSlide + 1); startSlider(); });
  dots.forEach(dot => {
    dot.addEventListener('click', () => { clearInterval(sliderInterval); goToSlide(parseInt(dot.dataset.index, 10)); startSlider(); });
  });
  startSlider();
}

// ---- FAQ Accordion ----
document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item   = btn.closest('.faq-item');
    const answer = item.querySelector('.faq-answer');
    const isOpen = btn.getAttribute('aria-expanded') === 'true';
    // Close all
    document.querySelectorAll('.faq-item').forEach(i => {
      i.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      i.querySelector('.faq-answer').style.maxHeight = null;
      i.classList.remove('open');
    });
    if (!isOpen) {
      btn.setAttribute('aria-expanded', 'true');
      answer.style.maxHeight = answer.scrollHeight + 'px';
      item.classList.add('open');
    }
  });
});

// ---- Newsletter form ----
const newsletterForm = document.getElementById('newsletterForm');
if (newsletterForm) {
  newsletterForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = newsletterForm.querySelector('[type="submit"]');
    const email = newsletterForm.querySelector('[name="email"]').value.trim();
    if (!email || !email.includes('@')) {
      alert('Podaj poprawny adres e-mail.');
      return;
    }
    btn.disabled = true;
    btn.textContent = 'Zapisywanie…';

    fetch('/api/newsletter.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ email }),
    })
      .then(r => r.json())
      .then(data => {
        if (data.success) {
          btn.textContent = '✓ Zapisano!';
          btn.style.background = '#16a34a';
          newsletterForm.reset();
        } else {
          btn.disabled = false;
          btn.textContent = 'Zapisz się';
          alert(data.error || 'Wystąpił błąd. Spróbuj ponownie.');
        }
      })
      .catch(() => {
        btn.disabled = false;
        btn.textContent = 'Zapisz się';
        alert('Błąd sieci. Sprawdź połączenie i spróbuj ponownie.');
      });
  });
}

// ---- Mega menu keyboard/click close ----
function closeAllDropdowns() {
  document.querySelectorAll('.has-dropdown').forEach(d => d.classList.remove('open'));
}

function toggleDropdown(li) {
  const wasOpen = li.classList.contains('open');
  closeAllDropdowns();
  if (!wasOpen) li.classList.add('open');
}

document.addEventListener('click', (e) => {
  if (!e.target.closest('.has-dropdown')) closeAllDropdowns();
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') closeAllDropdowns();
});

document.querySelectorAll('.has-dropdown > a').forEach(a => {
  a.addEventListener('click', (e) => {
    const dropdown = a.closest('.has-dropdown');
    if (window.matchMedia('(max-width: 640px)').matches && !dropdown.classList.contains('open')) {
      e.preventDefault();
      toggleDropdown(dropdown);
      return;
    }
    toggleDropdown(dropdown);
  });
  a.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      toggleDropdown(a.closest('.has-dropdown'));
    }
  });
});
