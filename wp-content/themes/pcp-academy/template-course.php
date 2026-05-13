<?php
/*
Template Name: Course
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
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="active">Course</a>
      <a href="<?php echo esc_url(home_url('/coach/')); ?>">The Coach</a>
      <a href="<?php echo esc_url(home_url('/stories/')); ?>">Stories</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
    <div class="top-right">
      <div class="lang"><button class="current">EN</button><button>ES</button><button>FR</button></div>
      <a href="#enrol" class="btn btn-primary">Enrol now <span class="arrow">→</span></a>
    </div>
  </div>
</header>

<section class="course-hero">
  <div class="container course-hero-grid">
    <div>
      <div class="course-hero-eyebrow"><span></span> Initiation course, now enrolling</div>
      <h1 class="course-h1">Initiation to <em>Padel</em>.</h1>
      <p class="course-hero-sub">A complete foundation course for first time players. Twelve 4K lessons, four modules, taught by a former German national team competitor on courts in Marbella. Watch at your own pace, replay any lesson, return to the course at any time.</p>

      <div class="spec-grid">
        <div class="spec-item"><div class="lbl">Lessons</div><div class="val"><em>12</em>, in 4K</div></div>
        <div class="spec-item"><div class="lbl">Modules</div><div class="val"><em>4</em>, sequential</div></div>
        <div class="spec-item"><div class="lbl">Total length</div><div class="val">~3 hours</div></div>
        <div class="spec-item"><div class="lbl">Languages</div><div class="val">EN, ES, FR</div></div>
      </div>

      <div class="course-price-display">
        <div class="price">€<em>59.95</em></div>
        <div class="terms">One time payment.<br>Lifetime access.</div>
      </div>

      <div class="course-hero-actions">
        <a href="#enrol" class="btn btn-primary btn-large">Enrol now <span class="arrow">→</span></a>
        <a href="#preview" class="btn btn-ghost btn-large">Watch lesson 1 free</a>
      </div>
    </div>

    <div class="preview-card" id="preview">
      <div class="preview-video">
        <span class="preview-tag">Free preview</span>
        <button class="play-btn" aria-label="Play preview">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
        </button>
      </div>
      <div class="preview-meta">
        <div class="ttl">Lesson 01, <em>welcome to the court</em></div>
        <div class="sub">2 min · Yannik Molina · Filmed at Palm Coast Club, Marbella</div>
      </div>
    </div>
  </div>
</section>

<div class="trust-band">
  <div class="container trust-band-inner">
    <div class="trust-band-item">
      <div class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
      <div class="text"><strong>Secure payment</strong>SSL encrypted, Stripe protected</div>
    </div>
    <div class="trust-band-item">
      <div class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg></div>
      <div class="text"><strong>Lifetime access</strong>Pay once, return any time</div>
    </div>
    <div class="trust-band-item">
      <div class="icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div>
      <div class="text"><strong>Certificate</strong>On completion</div>
    </div>
  </div>
</div>

<section class="block">
  <div class="container">
    <span class="section-num">01, the curriculum</span>
    <h2 class="section-title">Twelve lessons, structured to <em>compound</em>.</h2>
    <p class="section-lead">Each lesson is built on the one before it. By the time you finish module four, you can read a rally, take your position, and play a complete point.</p>

    <div class="curriculum-list">
      <article class="curric-module">
        <div class="curric-module-num">Module i.</div>
        <div>
          <h3>Foundations, the <em>court and the rules</em></h3>
          <p class="curric-module-desc">Where padel comes from, how the court works, what the walls do, how scoring runs, and the etiquette every player follows. By the end of this module, you can step onto a court and play a point.</p>
          <div class="curric-lessons">
            <div class="curric-lesson"><span class="num">01</span><span class="ttl">Welcome to the court</span><span class="min">12 min</span></div>
            <div class="curric-lesson"><span class="num">02</span><span class="ttl">Rules, scoring, and the walls</span><span class="min">14 min</span></div>
            <div class="curric-lesson"><span class="num">03</span><span class="ttl">Equipment, choosing your first racket</span><span class="min">11 min</span></div>
          </div>
        </div>
      </article>

      <article class="curric-module">
        <div class="curric-module-num">Module ii.</div>
        <div>
          <h3>Technique, <em>grip, swing, contact</em></h3>
          <p class="curric-module-desc">The four core strokes. Forehand, backhand, volley, and serve. How to hold the racket, where to make contact, what your wrist is doing. Demonstrated on court, slowed down, repeated from three angles.</p>
          <div class="curric-lessons">
            <div class="curric-lesson"><span class="num">04</span><span class="ttl">The grip and the ready position</span><span class="min">13 min</span></div>
            <div class="curric-lesson"><span class="num">05</span><span class="ttl">Forehand and backhand fundamentals</span><span class="min">17 min</span></div>
            <div class="curric-lesson"><span class="num">06</span><span class="ttl">The serve and the return</span><span class="min">15 min</span></div>
          </div>
        </div>
      </article>

      <article class="curric-module">
        <div class="curric-module-num">Module iii.</div>
        <div>
          <h3>Movement, <em>footwork and court coverage</em></h3>
          <p class="curric-module-desc">Padel is a positioning sport. The right place wins more points than the right shot. This module teaches you how to move, when to advance, and where to be after your partner hits.</p>
          <div class="curric-lessons">
            <div class="curric-lesson"><span class="num">07</span><span class="ttl">Footwork and balance</span><span class="min">14 min</span></div>
            <div class="curric-lesson"><span class="num">08</span><span class="ttl">The lob and the smash</span><span class="min">16 min</span></div>
            <div class="curric-lesson"><span class="num">09</span><span class="ttl">Playing the walls</span><span class="min">13 min</span></div>
          </div>
        </div>
      </article>

      <article class="curric-module">
        <div class="curric-module-num">Module iv.</div>
        <div>
          <h3>Match play, <em>doubles and reading the rally</em></h3>
          <p class="curric-module-desc">How a point is won, when to attack the net, when to fall back, and how to communicate with your partner. The module finishes with a full filmed match, narrated, so you can see the principles applied in real time.</p>
          <div class="curric-lessons">
            <div class="curric-lesson"><span class="num">10</span><span class="ttl">Doubles positioning</span><span class="min">15 min</span></div>
            <div class="curric-lesson"><span class="num">11</span><span class="ttl">Reading the rally and shot selection</span><span class="min">14 min</span></div>
            <div class="curric-lesson"><span class="num">12</span><span class="ttl">A full match, narrated</span><span class="min">22 min</span></div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="block dark-section">
  <div class="container">
    <span class="section-num">02, who taught it</span>
    <h2 class="section-title">A curriculum designed by a <em>player</em>, not a publisher.</h2>
    <div class="coach-grid">
      <div class="coach-portrait">
        <div class="coach-portrait-tag"><div class="name">Yannik Molina</div><div class="role">Head coach</div></div>
      </div>
      <div class="coach-bio">
        <h3>Twelve years as a player. A decade as a coach. <em>Three continents</em> of teaching experience.</h3>
        <p>Yannik competed at European Championship level for the German national team. He has coached players in Germany, Sweden, Kuwait, and Spain, from absolute beginners to tournament finalists. The curriculum in this course is the same one he uses on court, restructured for someone who has never played.</p>
        <p>Every lesson is filmed at Palm Coast Club in Marbella. You see real shots, on real courts, demonstrated and broken down at speed and slowed down. No slides. No voiceovers over stock footage.</p>
        <a href="<?php echo esc_url(home_url('/coach/')); ?>" class="btn btn-ghost" style="margin-top: 16px; border-color: var(--cream); color: var(--cream);">Read the full story <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<section class="block" style="background: var(--cream-soft);">
  <div class="container">
    <span class="section-num">03, fit</span>
    <h2 class="section-title">Who this course is <em>for</em>, and who it isn't.</h2>
    <p class="section-lead">Honest filtering protects both sides. Read carefully before you enrol.</p>

    <div class="audience-grid">
      <div class="audience-card yes">
        <h3>This course is <em>for</em> you if</h3>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
          You have never played padel, or have played a few times without instruction.
        </div>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
          You want a structured curriculum, not a YouTube playlist.
        </div>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
          You prefer to practice in your own time, on your schedule.
        </div>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"/></svg>
          You want to walk onto a court with a partner and know what to do.
        </div>
      </div>

      <div class="audience-card no">
        <h3>This course is <em>not</em> for you if</h3>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6L6 18"/></svg>
          You play at intermediate level and want tactical depth. Wait for the Intermediate course in 2027.
        </div>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6L6 18"/></svg>
          You prefer one to one coaching only. Yannik offers private sessions in Marbella.
        </div>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6L6 18"/></svg>
          You expect a certificate that qualifies you to coach. This is a player development course.
        </div>
        <div class="row">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6L6 18"/></svg>
          You will only watch, never practice. The course works because you put racket to ball.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container container-narrow">
    <span class="section-num">04, common questions</span>
    <h2 class="section-title">Questions, <em>answered</em>.</h2>

    <div class="faq-list">
      <details class="faq-item">
        <summary>Do I need any equipment to start?</summary>
        <div class="faq-item-body">A padel racket and a few balls. Lesson three covers what to look for in a first racket, including specific recommendations across price points. You can complete most of the technique work in the course on any flat surface, then take what you have learned onto a court.</div>
      </details>
      <details class="faq-item">
        <summary>How long do I have access to the course?</summary>
        <div class="faq-item-body">Lifetime access. You buy once, and you can return to any lesson, any module, at any time. There is no expiry, no subscription, no renewal.</div>
      </details>
      <details class="faq-item">
        <summary>Can I watch on my phone or tablet?</summary>
        <div class="faq-item-body">Yes. The course is delivered through a web platform that works on any device with a browser. Phone, tablet, laptop, smart TV.</div>
      </details>
      <details class="faq-item">
        <summary>What languages are available?</summary>
        <div class="faq-item-body">English, Spanish, and French. You select your language at checkout. The full course is available in all three. Subtitles are also available.</div>
      </details>
      <details class="faq-item">
        <summary>Can I preview the course before I buy?</summary>
        <div class="faq-item-body">Yes. Lesson one is free, in full, before you enrol. Twelve minutes, the rules, the court, and your first grip. Same production quality as the rest of the course, so you can judge the format before committing.</div>
      </details>
      <details class="faq-item">
        <summary>Is this just videos, or is there more?</summary>
        <div class="faq-item-body">Twelve filmed lessons in 4K, written summary notes for each module, a printable curriculum overview, and a certificate of completion. There is no live component in the Initiation course. Live coaching with Yannik is available separately for students who want it.</div>
      </details>
      <details class="faq-item">
        <summary>Will there be more advanced courses?</summary>
        <div class="faq-item-body">Yes. The Intermediate Padel Skills course and the Pro Masterclass are in production for early 2027. Initiation course graduates receive priority access and launch pricing.</div>
      </details>
      <details class="faq-item">
        <summary>Can I come to Marbella to train in person after the course?</summary>
        <div class="faq-item-body">Yes. Palm Coast Padel runs in person clinics, padel trips, and stay and play packages on the Costa del Sol. Online students receive a dedicated invitation after completing the course.</div>
      </details>
    </div>
  </div>
</section>

<section class="block dark-section" id="enrol">
  <div class="container" style="text-align: center;">
    <span class="section-num">05, ready to begin</span>
    <h2 class="section-title" style="margin-left: auto; margin-right: auto;">€<em>59.95</em>. Lifetime access. <em>Start today</em>.</h2>
    <p class="section-lead" style="margin-left: auto; margin-right: auto; text-align: center;">One payment, twelve lessons, every drill demonstrated on a real court in Marbella.</p>
    <div style="margin-top: 40px; display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
      <a href="#" class="btn btn-primary btn-large">Enrol now for €59.95 <span class="arrow">→</span></a>
      <a href="#preview" class="btn btn-ghost btn-large" style="border-color: var(--cream); color: var(--cream);">Watch lesson 1 free</a>
    </div>
  </div>
</section>

<!-- sticky enrol bar -->
<div class="sticky-bar" id="stickyBar">
  <div class="sticky-bar-meta">
    <span class="price">€59.95</span>
    <span class="label">Lifetime access · Three languages</span>
  </div>
  <a href="#enrol" class="btn btn-primary">Enrol now <span class="arrow">→</span></a>
</div>

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
        <li><a href="#">Free first lesson</a></li>
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

<script>
  const sticky = document.getElementById('stickyBar');
  let lastScroll = 0;
  window.addEventListener('scroll', () => {
    const y = window.scrollY;
    if (y > 600 && y < document.body.scrollHeight - window.innerHeight - 400) {
      sticky.classList.add('visible');
    } else {
      sticky.classList.remove('visible');
    }
    lastScroll = y;
  });
</script>


<?php
get_footer();
