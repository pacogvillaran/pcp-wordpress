<?php
/*
Template Name: Contact
*/
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<style>

/* ============================================================
   PALM COAST PADEL ACADEMY, design system
   Built by Nimlo, April 2026
   ============================================================ */

:root {
  --cream: #F5EFE2;
  --cream-soft: #EDE5D2;
  --sand: #E0D2B4;
  --mist: #C9BB9E;
  --court: #2D4A3E;
  --court-deep: #1A2C24;
  --court-soft: #4A6B5C;
  --clay: #BD6F4E;
  --clay-deep: #9C5538;
  --ink: #1A1815;
  --ink-soft: #4A463F;
  --line: #C9BB9E40;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  font-family: 'Manrope', -apple-system, sans-serif;
  background: var(--cream);
  color: var(--ink);
  font-size: 16px;
  line-height: 1.65;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  overflow-x: hidden;
}

body::before {
  content: "";
  position: fixed;
  inset: 0;
  pointer-events: none;
  z-index: 1;
  opacity: 0.035;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2'/></filter><rect width='200' height='200' filter='url(%23n)' opacity='0.6'/></svg>");
}

a { color: inherit; text-decoration: none; }
img { max-width: 100%; display: block; }

.display { font-family: 'Fraunces', serif; font-weight: 400; letter-spacing: -0.02em; }
.italic { font-style: italic; font-weight: 300; }

.container { max-width: 1240px; margin: 0 auto; padding: 0 40px; }
.container-narrow { max-width: 920px; margin: 0 auto; padding: 0 40px; }

/* ============================================================
   TOP BAR
============================================================ */
.topbar {
  position: sticky;
  top: 0;
  z-index: 100;
  background: rgba(245, 239, 226, 0.92);
  border-bottom: 1px solid var(--line);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
}
.topbar-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 0;
}
.logo {
  font-family: 'Fraunces', serif;
  font-weight: 500;
  font-size: 19px;
  letter-spacing: 0.02em;
  color: var(--court-deep);
  display: flex;
  align-items: center;
  gap: 10px;
}
.logo-mark {
  width: 32px; height: 32px;
  border: 1.2px solid var(--court);
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  font-style: italic;
  color: var(--court);
}
.logo small {
  display: block;
  font-family: 'Manrope', sans-serif;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--ink-soft);
  margin-top: 2px;
}
.nav { display: flex; gap: 36px; font-size: 14px; font-weight: 500; }
.nav a {
  color: var(--ink-soft);
  transition: color 0.2s;
  position: relative;
}
.nav a:hover { color: var(--court); }
.nav a.active { color: var(--court-deep); }
.nav a.active::after {
  content: "";
  position: absolute;
  bottom: -22px;
  left: 0; right: 0;
  height: 1px;
  background: var(--court);
}

.top-right { display: flex; align-items: center; gap: 24px; }
.lang { display: flex; gap: 8px; font-size: 12px; font-weight: 600; letter-spacing: 0.1em; color: var(--ink-soft); }
.lang button {
  background: none;
  border: none;
  cursor: pointer;
  color: inherit;
  font: inherit;
  padding: 4px 6px;
  transition: color 0.2s;
}
.lang button.current { color: var(--court-deep); border-bottom: 1px solid var(--court); }
.lang button:hover { color: var(--court); }

/* ============================================================
   BUTTONS
============================================================ */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 12px 22px;
  border-radius: 999px;
  font-family: 'Manrope', sans-serif;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.04em;
  cursor: pointer;
  transition: all 0.25s ease;
  border: none;
  text-transform: uppercase;
}
.btn-primary { background: var(--court-deep); color: var(--cream); }
.btn-primary:hover { background: var(--clay); transform: translateY(-1px); }
.btn-ghost {
  background: transparent;
  color: var(--court-deep);
  border: 1px solid var(--court-deep);
}
.btn-ghost:hover { background: var(--court-deep); color: var(--cream); }
.btn-large { padding: 18px 36px; font-size: 14px; }
.btn .arrow { display: inline-block; transition: transform 0.25s ease; }
.btn:hover .arrow { transform: translateX(4px); }

/* ============================================================
   SHARED PAGE HEADER (interior pages)
============================================================ */
.page-header {
  position: relative;
  padding: 80px 0 100px;
  border-bottom: 1px solid var(--line);
}
.page-header-eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--clay);
  margin-bottom: 28px;
}
.page-header-eyebrow span { width: 32px; height: 1px; background: var(--clay); display: inline-block; }

.page-title {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: clamp(48px, 6.5vw, 96px);
  line-height: 0.98;
  letter-spacing: -0.025em;
  color: var(--court-deep);
  margin-bottom: 32px;
  max-width: 1000px;
}
.page-title em { font-style: italic; font-weight: 300; color: var(--clay); }

.page-sub {
  font-size: 19px;
  line-height: 1.55;
  color: var(--ink-soft);
  max-width: 620px;
  margin-bottom: 40px;
}

/* ============================================================
   SECTION SHELL
============================================================ */
section.block {
  padding: 120px 0;
  position: relative;
}
.section-num {
  font-family: 'Fraunces', serif;
  font-style: italic;
  font-size: 16px;
  color: var(--clay);
  letter-spacing: 0.04em;
  margin-bottom: 20px;
  display: block;
}
.section-title {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: clamp(40px, 5vw, 68px);
  line-height: 1.04;
  letter-spacing: -0.02em;
  color: var(--court-deep);
  margin-bottom: 24px;
  max-width: 820px;
}
.section-title em { font-style: italic; color: var(--clay); font-weight: 300; }
.section-lead {
  font-size: 19px;
  line-height: 1.55;
  color: var(--ink-soft);
  max-width: 640px;
}

/* dark variant */
section.block.dark, .dark-section {
  background: var(--court-deep);
  color: var(--cream);
}
.dark-section .section-num { color: var(--clay); }
.dark-section .section-title { color: var(--cream); }
.dark-section .section-title em { color: var(--clay); }
.dark-section .section-lead { color: rgba(245, 239, 226, 0.78); }

/* ============================================================
   AUTHORITY BAND (scrolling)
============================================================ */
.authority {
  background: var(--court-deep);
  color: var(--cream);
  padding: 28px 0;
  overflow: hidden;
}
.authority-track {
  display: flex;
  align-items: center;
  gap: 48px;
  font-family: 'Fraunces', serif;
  font-size: 18px;
  font-weight: 300;
  letter-spacing: 0.02em;
  white-space: nowrap;
  animation: scroll 60s linear infinite;
}
.authority-track em { font-style: italic; color: var(--clay); margin: 0 4px; }
.authority-dot { width: 5px; height: 5px; background: var(--clay); border-radius: 50%; flex-shrink: 0; }
@keyframes scroll {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}

/* ============================================================
   TRUST STRIP
============================================================ */
.trust-strip {
  margin-top: 24px;
  display: flex;
  gap: 28px;
  padding-top: 24px;
  border-top: 1px solid var(--line);
  flex-wrap: wrap;
}
.trust-item {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
  color: var(--ink-soft);
  letter-spacing: 0.04em;
}
.trust-item svg { flex-shrink: 0; }

/* ============================================================
   FOOTER
============================================================ */
footer {
  background: var(--court-deep);
  color: var(--cream);
  padding: 80px 0 32px;
}
.footer-grid {
  display: grid;
  grid-template-columns: 1.5fr 1fr 1fr 1fr;
  gap: 60px;
  padding-bottom: 60px;
  border-bottom: 1px solid rgba(245, 239, 226, 0.15);
}
.footer-brand .logo { color: var(--cream); margin-bottom: 20px; }
.footer-brand .logo-mark { border-color: var(--clay); color: var(--clay); }
.footer-brand p {
  font-size: 14px;
  color: rgba(245, 239, 226, 0.65);
  line-height: 1.6;
  max-width: 280px;
}
.footer-col h4 {
  font-family: 'Fraunces', serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: 20px;
  color: var(--clay);
}
.footer-col ul { list-style: none; }
.footer-col li {
  margin-bottom: 10px;
  font-size: 14px;
  color: rgba(245, 239, 226, 0.7);
  transition: color 0.2s;
}
.footer-col li a:hover { color: var(--cream); }

.footer-bottom {
  padding-top: 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 20px;
  font-size: 12px;
  color: rgba(245, 239, 226, 0.5);
  letter-spacing: 0.05em;
}
.footer-social { display: flex; gap: 16px; }
.footer-social a {
  width: 36px; height: 36px;
  border: 1px solid rgba(245, 239, 226, 0.2);
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 0.25s;
  color: var(--cream);
}
.footer-social a:hover { border-color: var(--clay); background: var(--clay); }

/* ============================================================
   RESPONSIVE
============================================================ */
@media (max-width: 980px) {
  .container, .container-narrow { padding: 0 24px; }
  .nav { display: none; }
  section.block { padding: 80px 0; }
  .page-header { padding: 56px 0 64px; }
  .top-right .lang { display: none; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
}
@media (max-width: 600px) {
  .footer-grid { grid-template-columns: 1fr; }
}


</style>



<header class="topbar">
  <div class="container topbar-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><span class="logo-mark">P</span><div><div>Palm Coast Padel</div><small>Academy, Marbella</small></div></a>
    <nav class="nav">
      <a href="<?php echo esc_url(home_url('/')); ?>">Academy</a>
      <a href="<?php echo esc_url(home_url('/course/')); ?>">Course</a>
      <a href="<?php echo esc_url(home_url('/coach/')); ?>">The Coach</a>
      <a href="<?php echo esc_url(home_url('/stories/')); ?>">Stories</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="active">Contact</a>
    </nav>
    <div class="top-right">
      <div class="lang"><button class="current">EN</button><button>ES</button><button>FR</button></div>
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary">Enrol now <span class="arrow">→</span></a>
    </div>
  </div>
</header>

<section class="page-header">
  <div class="container">
    <div class="page-header-eyebrow"><span></span> Get in touch</div>
    <h1 class="page-title">Talk to us, in <em>Marbella</em>.</h1>
    <p class="page-sub">Course support, private coaching enquiries, partnership requests, or anything else. Replies within one working day, in English, Spanish, or French.</p>
  </div>
</section>

<section>
  <div class="container contact-grid">
    <div class="methods">
      <span class="section-num">Direct contact</span>
      <h2 class="section-title" style="font-size: 36px;">The fastest way to <em>reach us</em>.</h2>

      <div class="method-row">
        <div class="lbl">Email</div>
        <div class="val"><a href="mailto:info@palmcoastpadel.com">info@palmcoastpadel.com</a></div>
        <div class="sub">For course support, billing, or general enquiries. Replies within one working day.</div>
      </div>

      <div class="method-row">
        <div class="lbl">Phone</div>
        <div class="val"><a href="tel:+34673240532">+34 673 24 05 32</a></div>
        <div class="sub">Marbella office, available 09.00 to 19.00 CET, Monday to Friday.</div>
      </div>

      <div class="method-row">
        <div class="lbl">WhatsApp</div>
        <div class="val"><a href="https://wa.me/34673240532">+34 673 24 05 32</a></div>
        <div class="sub">For quick course questions or trip enquiries. Same number, faster response.</div>
      </div>

      <div class="method-row">
        <div class="lbl">Private coaching</div>
        <div class="val"><em>Yannik Molina</em>, head coach</div>
        <div class="sub">Use the form to request a private clinic in Marbella. Yannik responds personally within two working days.</div>
      </div>

      <div class="location-card">
        <div class="lbl">In person</div>
        <div class="val"><em>Palm Coast Club</em>, Marbella</div>
        <p>The academy is filmed at, and operated from, Palm Coast Club on the Costa del Sol. Visitors welcome by appointment for clinics, trips, and stay and play packages.</p>
        <div class="coords">36.510° N, 4.886° W · Costa del Sol, España</div>
      </div>
    </div>

    <div class="contact-form-card">
      <div class="eyebrow">Send a message</div>
      <h2>Tell us what you <em>need</em>.</h2>
      <p class="intro">Use this form for anything that does not need a phone call. We read every message, and we reply within one working day.</p>

      <form onsubmit="event.preventDefault();">
        <div class="form-row">
          <div class="form-field">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
        </div>

        <div class="form-field">
          <label for="topic">What is this about</label>
          <select id="topic" name="topic" required>
            <option value="">Select a topic</option>
            <option>Course support</option>
            <option>Billing</option>
            <option>Private coaching in Marbella</option>
            <option>Padel trip or stay and play</option>
            <option>Partnership or media</option>
            <option>Something else</option>
          </select>
        </div>

        <div class="form-field">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="A few sentences are enough. We will follow up if we need more." required></textarea>
        </div>

        <div class="form-submit">
          <button type="submit" class="btn btn-primary btn-large">Send message <span class="arrow">→</span></button>
        </div>

        <p class="form-note">Your details stay with us. We do not share, sell, or pass them to third parties. We will only contact you about what you ask about.</p>
      </form>
    </div>
  </div>
</section>

<section class="response-band">
  <div class="container response-grid">
    <div class="response-item">
      <div class="lbl">Email reply</div>
      <div class="val">Within <em>one working day</em></div>
    </div>
    <div class="response-item">
      <div class="lbl">Phone hours</div>
      <div class="val">09.00 to 19.00 <em>CET</em></div>
    </div>
    <div class="response-item">
      <div class="lbl">Languages</div>
      <div class="val">English · Spanish · <em>French</em></div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container container-narrow" style="text-align: center;">
    <span class="section-num">Before you write</span>
    <h2 class="section-title" style="margin-left: auto; margin-right: auto;">Most answers are on the <em>course page</em>.</h2>
    <p class="section-lead" style="margin-left: auto; margin-right: auto;">Pricing, course length, languages, devices, certificates, future courses, in person training. The FAQ on the course page covers the eight most common questions before you ask them.</p>
    <div style="margin-top: 36px; display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url(home_url('/course/')); ?>#faq" class="btn btn-primary btn-large">Read the FAQ <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-ghost btn-large">See the course</a>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><span class="logo-mark">P</span><div><div>Palm Coast Padel</div><small style="color: rgba(245, 239, 226, 0.6);">Academy, Marbella</small></div></a>
        <p>The Marbella padel academy. Teaching the game from where it grew up, online and in person.</p>
      </div>
      <div class="footer-col"><h4>Academy</h4><ul>
        <li><a href="<?php echo esc_url(home_url('/course/')); ?>">Initiation course</a></li>
        <li><a href="<?php echo esc_url(home_url('/coach/')); ?>">The coach</a></li>
        <li><a href="<?php echo esc_url(home_url('/stories/')); ?>">Student stories</a></li>
        <li><a href="<?php echo esc_url(home_url('/school/')); ?>">Free first lesson</a></li>
      </ul></div>
      <div class="footer-col"><h4>Palm Coast</h4><ul>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About the academy</a></li>
        <li><a href="#">Marbella trips</a></li>
        <li><a href="#">In person coaching</a></li>
        <li><a href="#">The club</a></li>
      </ul></div>
      <div class="footer-col"><h4>Contact</h4><ul>
        <li>+34 673 24 05 32</li>
        <li>info@palmcoastpadel.com</li>
        <li>Marbella, Spain</li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Get in touch</a></li>
      </ul></div>
    </div>
    <div class="footer-bottom">
      <div>© Palm Coast Padel SL, 2026. Marbella, Spain.</div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="0.5" fill="currentColor"/></svg></a>
        <a href="#" aria-label="YouTube"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22.54 6.42a2.78 2.78 0 00-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 00-1.94 2A29 29 0 001 11.75a29 29 0 00.46 5.33A2.78 2.78 0 003.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 001.94-2 29 29 0 00.46-5.25 29 29 0 00-.46-5.33z"/><path d="M9.75 15.02l5.75-3.27-5.75-3.27v6.54z" fill="currentColor"/></svg></a>
        <a href="#" aria-label="LinkedIn"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 10-4 0v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
      </div>
      <div><a href="#">Privacy</a> · <a href="#">Terms</a> · <a href="#">Cookies</a></div>
    </div>
  </div>
</footer>


<?php
get_footer();
