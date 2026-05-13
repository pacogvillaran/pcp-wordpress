<?php
/*
Template Name: About
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

<style>
.about-intro { padding: 120px 0; }
.about-intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 100px; align-items: center; }
.about-intro-text .pull { font-family: 'Fraunces', serif; font-style: italic; font-weight: 300; font-size: 38px; line-height: 1.2; color: var(--clay); margin-bottom: 32px; letter-spacing: -0.01em; }
.about-intro-text p { font-size: 16px; line-height: 1.75; color: var(--ink-soft); margin-bottom: 18px; }

.about-visual { position: relative; aspect-ratio: 4/5; border-radius: 4px; overflow: hidden; background: linear-gradient(170deg, #E0D2B4 0%, #BD6F4E 100%); }
.about-visual::before { content: ""; position: absolute; inset: 0; background: radial-gradient(ellipse at 30% 70%, rgba(45, 74, 62, 0.4) 0%, transparent 60%), radial-gradient(circle at 70% 20%, rgba(245, 239, 226, 0.3) 0%, transparent 50%); }
.about-visual::after { content: "MARBELLA"; position: absolute; bottom: 32px; left: 32px; font-family: 'Fraunces', serif; font-style: italic; font-size: 64px; font-weight: 300; color: var(--cream); line-height: 1; letter-spacing: -0.01em; }
.about-visual-coords { position: absolute; top: 32px; left: 32px; color: var(--cream); font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; opacity: 0.85; line-height: 1.6; }

/* timeline */
.timeline { margin-top: 64px; max-width: 920px; }
.timeline-item { display: grid; grid-template-columns: 140px 1fr; gap: 60px; padding: 36px 0; border-top: 1px solid var(--line); }
.timeline-item:last-child { border-bottom: 1px solid var(--line); }
.timeline-year { font-family: 'Fraunces', serif; font-style: italic; font-weight: 400; font-size: 32px; color: var(--clay); line-height: 1; }
.timeline-content h3 { font-family: 'Fraunces', serif; font-weight: 400; font-size: 24px; color: var(--court-deep); margin-bottom: 10px; letter-spacing: -0.01em; }
.timeline-content p { font-size: 15px; color: var(--ink-soft); line-height: 1.7; max-width: 640px; }

/* method */
.method-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-top: 64px; }
.method-card { padding: 36px 32px; background: var(--cream); border: 1px solid var(--line); border-radius: 4px; transition: transform 0.3s, box-shadow 0.3s; }
.method-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px -20px rgba(26, 44, 36, 0.2); }
.method-num { font-family: 'Fraunces', serif; font-style: italic; font-size: 14px; color: var(--clay); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 18px; }
.method-card h3 { font-family: 'Fraunces', serif; font-weight: 400; font-size: 22px; color: var(--court-deep); margin-bottom: 14px; letter-spacing: -0.01em; line-height: 1.2; }
.method-card h3 em { font-style: italic; color: var(--clay); }
.method-card p { font-size: 14px; color: var(--ink-soft); line-height: 1.65; }

/* ecosystem */
.ecosystem-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-top: 60px; align-items: stretch; }
.eco-card { background: var(--cream-soft); padding: 48px; border-radius: 6px; border: 1px solid var(--line); position: relative; overflow: hidden; }
.eco-card.dark { background: var(--court-deep); color: var(--cream); border: none; }
.eco-card .eyebrow { font-size: 11px; letter-spacing: 0.24em; text-transform: uppercase; color: var(--clay); font-weight: 700; margin-bottom: 18px; }
.eco-card h3 { font-family: 'Fraunces', serif; font-weight: 400; font-size: 32px; line-height: 1.1; margin-bottom: 18px; letter-spacing: -0.015em; }
.eco-card.dark h3 { color: var(--cream); }
.eco-card h3 em { font-style: italic; color: var(--clay); }
.eco-card p { font-size: 15px; line-height: 1.7; color: var(--ink-soft); margin-bottom: 28px; }
.eco-card.dark p { color: rgba(245, 239, 226, 0.78); }

@media (max-width: 980px) {
  .about-intro-grid { grid-template-columns: 1fr; gap: 56px; }
  .timeline-item { grid-template-columns: 1fr; gap: 12px; }
  .method-grid { grid-template-columns: 1fr; }
  .ecosystem-grid { grid-template-columns: 1fr; gap: 32px; }
  .about-intro { padding: 80px 0; }
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
      <a href="<?php echo esc_url(home_url('/about/')); ?>" class="active">About</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
    <div class="top-right">
      <div class="lang"><button class="current">EN</button><button>ES</button><button>FR</button></div>
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary">Enrol now <span class="arrow">→</span></a>
    </div>
  </div>
</header>

<section class="page-header">
  <div class="container">
    <div class="page-header-eyebrow"><span></span> About the academy</div>
    <h1 class="page-title">Padel was made in <em>Spain</em>. Marbella is where it grew up.</h1>
    <p class="page-sub">Palm Coast Padel Academy is the online wing of Palm Coast Padel, a Marbella based club, coaching school, and padel trip operator. We teach the game from where it became a sport.</p>
  </div>
</section>

<section class="about-intro">
  <div class="container about-intro-grid">
    <div class="about-intro-text">
      <p class="pull">"You can learn padel anywhere. You will learn faster from somewhere the game is woven into how people live."</p>
      <p>Padel was invented in Acapulco. It became a sport in Marbella. The first courts in Europe were built on the Costa del Sol in the early 1970s, when a Spanish businessman who had played the game in Mexico brought a court back home. Within a decade, the sport had a circuit. Within two, it had a federation. Today, the region has more padel courts per square kilometre than anywhere else on earth.</p>
      <p>Marbella did not just host the early years. It refined them. The technique, the tactics, the doubles formation that the rest of Europe is now learning came from courts on the Costa del Sol, from coaches who watched the sport take shape, and from players who built the modern game one tournament at a time.</p>
      <p>This is the place. This is what we teach from.</p>
    </div>
    <div class="about-visual" aria-hidden="true">
      <div class="about-visual-coords">36.510° N, 4.886° W<br>Costa del Sol, España</div>
    </div>
  </div>
</section>

<section class="block" style="background: var(--cream-soft);">
  <div class="container">
    <span class="section-num">02, the story</span>
    <h2 class="section-title">A short history of <em>Palm Coast Padel</em>.</h2>
    <p class="section-lead">The academy did not begin as a digital product. It began on courts in Marbella, with players who wanted somewhere to practice when they could not be there in person.</p>

    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-year">2018</div>
        <div class="timeline-content">
          <h3>The club takes shape</h3>
          <p>Palm Coast Padel begins as a coaching operation on the Costa del Sol, running clinics, private lessons, and weekend trips for visiting players from across Europe.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year">2021</div>
        <div class="timeline-content">
          <h3>Yannik joins as head coach</h3>
          <p>After a decade competing and coaching across Germany, Sweden, and Kuwait, Yannik Molina relocates to Marbella to coach where the sport is most concentrated.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year">2024</div>
        <div class="timeline-content">
          <h3>Visitors ask for a way to keep practicing</h3>
          <p>Trip guests and clinic attendees keep returning home and losing the structure of what they learned in Marbella. The first version of the online curriculum is built to address this.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year">2026</div>
        <div class="timeline-content">
          <h3>The academy launches publicly</h3>
          <p>The Initiation to Padel course goes live in three languages, available worldwide, taught by Yannik, filmed at Palm Coast Club. The Intermediate and Pro courses are in production for early 2027.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container">
    <span class="section-num">03, the method</span>
    <h2 class="section-title">Three principles that shape <em>every lesson</em>.</h2>
    <p class="section-lead">An online course should not feel like an online course. Every decision in the curriculum follows from this.</p>

    <div class="method-grid">
      <div class="method-card">
        <div class="method-num">Principle i.</div>
        <h3>Filmed on a <em>real court</em>.</h3>
        <p>Every drill, every demonstration, every shot is filmed on the court at Palm Coast Club. No animations, no slide decks, no voiceovers over stock footage. You watch the shot. You see what the body is doing. You replay it.</p>
      </div>
      <div class="method-card">
        <div class="method-num">Principle ii.</div>
        <h3>Built to <em>compound</em>.</h3>
        <p>Each lesson is constructed on the one before it. By the end of module four, you have a full toolbox. You can read a rally, take your position, and play a complete point. Nothing is taught in isolation.</p>
      </div>
      <div class="method-card">
        <div class="method-num">Principle iii.</div>
        <h3>Designed to <em>transfer</em>.</h3>
        <p>The course does not exist to make you a better watcher. It exists to make you a better player. Every lesson includes a practice prompt you can take onto your local court the next day.</p>
      </div>
    </div>
  </div>
</section>

<section class="block dark-section">
  <div class="container">
    <span class="section-num">04, ecosystem</span>
    <h2 class="section-title">The academy is <em>one wing</em> of Palm Coast Padel.</h2>
    <p class="section-lead">Online learning is the entry point. Most students who finish the course end up on a Marbella court within a year.</p>

    <div class="ecosystem-grid">
      <div class="eco-card">
        <div class="eyebrow">Academy, online</div>
        <h3>Learn the game from <em>home</em>.</h3>
        <p>Twelve lessons, four modules, taught by Yannik. Available worldwide. Watch at your own pace. Lifetime access. Most students complete the course in two to four weeks.</p>
        <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary">Begin the course <span class="arrow">→</span></a>
      </div>
      <div class="eco-card dark">
        <div class="eyebrow">Club, in person</div>
        <h3>Train where the game <em>grew up</em>.</h3>
        <p>Padel trips, in person clinics, private coaching with Yannik, and stay and play packages on the Costa del Sol. Online students receive a dedicated invitation after course completion.</p>
        <a href="#" class="btn btn-ghost" style="border-color: var(--cream); color: var(--cream);">Visit Marbella <span class="arrow">→</span></a>
      </div>
    </div>
  </div>
</section>

<section class="block" style="text-align: center; background: var(--cream-soft);">
  <div class="container container-narrow">
    <span class="section-num">05, begin</span>
    <h2 class="section-title" style="margin-left: auto; margin-right: auto;">Twelve lessons, lifetime access, <em>€59.95</em>.</h2>
    <p class="section-lead" style="margin-left: auto; margin-right: auto;">No prior experience required. Available in English, Spanish, and French.</p>
    <div style="margin-top: 36px; display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary btn-large">Enrol now <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/coach/')); ?>" class="btn btn-ghost btn-large">Meet the coach</a>
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
