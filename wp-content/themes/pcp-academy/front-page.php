<?php
/*
Template Name: Homepage
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
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <span class="logo-mark">P</span>
      <div>
        <div>Palm Coast Padel</div>
        <small>Academy, Marbella</small>
      </div>
    </a>
    <nav class="nav">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="active">Academy</a>
      <a href="<?php echo esc_url(home_url('/course/')); ?>">Course</a>
      <a href="<?php echo esc_url(home_url('/coach/')); ?>">The Coach</a>
      <a href="<?php echo esc_url(home_url('/stories/')); ?>">Stories</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
    <div class="top-right">
      <div class="lang" role="group" aria-label="Language">
        <button class="current">EN</button><button>ES</button><button>FR</button>
      </div>
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary">Enrol now <span class="arrow">→</span></a>
    </div>
  </div>
</header>

<section class="hero">
  <div class="container hero-grid">
    <div>
      <div class="hero-eyebrow"><span></span> The Marbella padel academy, online</div>
      <h1 class="hero-title">Learn padel <em>where padel<br>was born.</em></h1>
      <p class="hero-sub">Marbella is the European home of padel. Now teaching the game online, through twelve 4K lessons taught by a former German national team player. Lifetime access from €59.95.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary btn-large">Begin the course <span class="arrow">→</span></a>
        <a href="#preview" class="btn btn-ghost btn-large">Watch the introduction</a>
      </div>
      <div class="hero-meta">
        <div class="hero-meta-item"><div class="num"><em>12</em> lessons</div><div class="lbl">4K video</div></div>
        <div class="hero-meta-item"><div class="num"><em>4</em> modules</div><div class="lbl">Structured curriculum</div></div>
        <div class="hero-meta-item"><div class="num">Lifetime</div><div class="lbl">Access included</div></div>
      </div>
    </div>
    <div class="hero-visual" aria-hidden="true">
      <span class="hero-tag">Initiation course, live</span>
      <div class="hero-vertical-text">Marbella · Costa del Sol · Est. Academy</div>
      <div class="hero-court-net"></div>
      <div class="hero-court-service"></div>
      <div class="hero-stamp">
        <div class="since">Filmed at</div>
        <div class="place">Palm Coast Club, Marbella</div>
      </div>
    </div>
  </div>
</section>

<div class="authority">
  <div class="authority-track">
    <span>Marbella, the European home of <em>padel</em></span><span class="authority-dot"></span>
    <span>Founded in <em>Spain</em>, refined on the Costa del Sol</span><span class="authority-dot"></span>
    <span>Coached by <em>Yannik Molina</em>, ex German national team</span><span class="authority-dot"></span>
    <span>Filmed in <em>4K</em> on a real court</span><span class="authority-dot"></span>
    <span>Marbella, the European home of <em>padel</em></span><span class="authority-dot"></span>
    <span>Founded in <em>Spain</em>, refined on the Costa del Sol</span><span class="authority-dot"></span>
    <span>Coached by <em>Yannik Molina</em>, ex German national team</span><span class="authority-dot"></span>
    <span>Filmed in <em>4K</em> on a real court</span><span class="authority-dot"></span>
  </div>
</div>

<section class="block">
  <div class="container">
    <span class="section-num">01, the course</span>
    <h2 class="section-title">One course, built to take you from <em>first racket</em> to first match.</h2>
    <p class="section-lead">No experience required. Twelve focused lessons, four progression modules, every drill demonstrated on a real court. Designed by Yannik Molina, filmed in Marbella.</p>

    <div class="course-feature">
      <div class="course-feature-visual" aria-hidden="true">
        <span class="visual-tag">Now enrolling</span>
        <div class="visual-meta">
          <div class="row">Initiation, English · Spanish · French</div>
          <div class="name">Initiation to <em>Padel</em></div>
        </div>
      </div>
      <div class="course-feature-body">
        <div>
          <h3 class="course-h">From rules to rallies, in <em>four modules</em>.</h3>
          <p class="course-desc">A complete foundation. Court layout, scoring, grip, service, forehand, backhand, lob, smash, positioning, doubles tactics. Watch, replay, return at any time.</p>
          <div class="course-modules">
            <div class="module"><span class="module-num">i.</span><span class="module-name">Foundations, the court and the rules</span><span class="module-len">3 lessons</span></div>
            <div class="module"><span class="module-num">ii.</span><span class="module-name">Technique, grip, swing, contact</span><span class="module-len">3 lessons</span></div>
            <div class="module"><span class="module-num">iii.</span><span class="module-name">Movement, footwork and court coverage</span><span class="module-len">3 lessons</span></div>
            <div class="module"><span class="module-num">iv.</span><span class="module-name">Match play, doubles tactics and reading the rally</span><span class="module-len">3 lessons</span></div>
          </div>
        </div>
        <div>
          <div class="course-buy">
            <div class="price-block">
              <div class="price-label">One time, lifetime access</div>
              <div class="price">€59.95</div>
              <div class="price-note">Available in English, Spanish, French</div>
            </div>
            <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary btn-large">Enrol now <span class="arrow">→</span></a>
          </div>
          <div class="trust-strip">
            <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Secure payment</div>
            <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="9"/></svg>Lifetime access</div>
            <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M8 12h8M12 8v8"/></svg>Certificate included</div>
          </div>
        </div>
      </div>
    </div>

    <div class="coming-row">
      <div class="coming-row-text">
        <div class="label">Future curriculum</div>
        <h3>Intermediate and <em>Pro Masterclass</em>, in development.</h3>
        <p>Two follow on courses are in production with Yannik for early 2027. Join the waitlist for early access and launch pricing.</p>
      </div>
      <form class="waitlist-form" onsubmit="event.preventDefault();">
        <input type="email" placeholder="Your email" aria-label="Email for waitlist" required>
        <button type="submit">Join waitlist</button>
      </form>
    </div>
  </div>
</section>

<section class="block dark-section">
  <div class="container">
    <span class="section-num">02, the coach</span>
    <h2 class="section-title">Taught by a player who has competed at <em>European level</em>.</h2>
    <div class="coach-grid">
      <div class="coach-portrait" aria-hidden="true">
        <div class="coach-portrait-tag">
          <div class="name">Yannik Molina</div>
          <div class="role">Head coach, Palm Coast Padel Academy</div>
        </div>
      </div>
      <div class="coach-bio">
        <h3>Former German national team competitor. Coach across <em>three continents</em>. Now teaching from Marbella.</h3>
        <p>Yannik has played padel at European Championship level with the German national team and has spent the last decade coaching internationally. Germany, Sweden, Kuwait. Players at every level, from first lesson to tournament finals.</p>
        <p>He moved to Marbella to coach where the sport is at its most refined, and built this academy to teach the same curriculum he uses on court, structured for someone who has never picked up a racket.</p>
        <div class="coach-credentials">
          <div class="credential"><div class="label">Playing record</div><div class="value">German national team, European Championship competitor</div></div>
          <div class="credential"><div class="label">Coaching record</div><div class="value">Germany, Sweden, Kuwait, Spain</div></div>
          <div class="credential"><div class="label">Years on court</div><div class="value">Twelve, professional level</div></div>
          <div class="credential"><div class="label">Currently based</div><div class="value">Palm Coast Club, Marbella</div></div>
        </div>
        <div style="margin-top: 36px;"><a href="<?php echo esc_url(home_url('/coach/')); ?>" class="btn btn-ghost" style="border-color: var(--cream); color: var(--cream);">Read the full story <span class="arrow">→</span></a></div>
      </div>
    </div>
  </div>
</section>

<section class="home-of">
  <div class="container">
    <span class="section-num">03, the place</span>
    <h2 class="section-title">Padel was made in <em>Spain</em>. Marbella is where it grew up.</h2>
    <div class="home-of-grid">
      <div class="home-of-text">
        <p class="pull">"You can learn anywhere. You will learn faster from somewhere the game is woven into how people live."</p>
        <p>Padel was invented in Acapulco, but it became a sport in Marbella. The first courts in Europe were built on the Costa del Sol in the early 1970s. Fifty years later, Marbella has more padel courts per square kilometre than anywhere else in the world.</p>
        <p>This is where the technique was refined, where the professional circuit grew, and where most of the top European players still train. The Palm Coast Padel Academy is filmed on courts in Marbella, taught by coaches based here, drawing on the version of the game that the rest of Europe is now learning to play.</p>
        <div class="home-of-stats">
          <div class="stat"><div class="num"><em>1,500</em>+</div><div class="lbl">Padel courts in the region</div></div>
          <div class="stat"><div class="num"><em>50</em>+</div><div class="lbl">Years of European padel history</div></div>
          <div class="stat"><div class="num"><em>1</em>st</div><div class="lbl">European city to host the sport</div></div>
          <div class="stat"><div class="num"><em>12</em> mo</div><div class="lbl">Of practice on real courts, filmed</div></div>
        </div>
      </div>
      <div class="home-of-visual" aria-hidden="true">
        <div class="home-of-visual-coords">36.510° N, 4.886° W<br>Costa del Sol</div>
      </div>
    </div>
  </div>
</section>

<section class="block" style="background: var(--cream-soft);">
  <div class="container">
    <span class="section-num">04, students</span>
    <h2 class="section-title">From first racket, to <em>first tournament</em>.</h2>
    <p class="section-lead">Real students, named, with the outcome they reached. Verified completion through the platform.</p>
    <div class="students-grid">
      <article class="student-card">
        <div class="student-head"><div class="student-avatar">CK</div><div class="student-meta"><div class="name">Camille Köhler</div><div class="place">Berlin, Germany</div></div></div>
        <p class="student-quote">"I had never held a padel racket. I finished the course in three weekends and played my first match the next Saturday. I knew where to stand."</p>
        <div class="student-result"><span>Started</span><span>April 2026</span></div>
      </article>
      <article class="student-card">
        <div class="student-head"><div class="student-avatar">AR</div><div class="student-meta"><div class="name">Anders Riis</div><div class="place">Copenhagen, Denmark</div></div></div>
        <p class="student-quote">"The lessons on positioning were the difference. I was running the court before. Now I let the ball come to me. My partner finally enjoys playing with me."</p>
        <div class="student-result"><span>Started</span><span>February 2026</span></div>
      </article>
      <article class="student-card">
        <div class="student-head"><div class="student-avatar">SV</div><div class="student-meta"><div class="name">Sofia Vásquez</div><div class="place">Madrid, Spain</div></div></div>
        <p class="student-quote">"Most lessons online are someone speaking over a slideshow. Yannik shows the shot, then walks you through what your body should be doing. It is the next best thing to being there."</p>
        <div class="student-result"><span>Started</span><span>January 2026</span></div>
      </article>
    </div>
    <div style="margin-top: 48px; text-align: center;"><a href="<?php echo esc_url(home_url('/stories/')); ?>" class="btn btn-ghost">Read more student stories <span class="arrow">→</span></a></div>
  </div>
</section>

<section class="block lead-magnet dark-section">
  <div class="container lead-magnet-inner">
    <div>
      <span class="section-num">05, before you commit</span>
      <h2>Try the first lesson <em>at no cost</em>.</h2>
      <p>If you want to feel the format before you enrol, take the opening lesson on us. Twelve minutes, the rules of the game, the court, and your first grip. Sent to your inbox immediately.</p>
    </div>
    <form class="lead-form" onsubmit="event.preventDefault();">
      <div class="lead-form-label">Free first lesson</div>
      <h3>Watch lesson one, on the court in Marbella.</h3>
      <input type="text" placeholder="Your name" aria-label="Your name" required>
      <input type="email" placeholder="Your email" aria-label="Your email" required>
      <button type="submit" class="btn btn-primary btn-large">Send me the lesson <span class="arrow">→</span></button>
      <div class="lead-form-note">No spam, no third party sharing. One email a week, only if there is something worth saying.</div>
    </form>
  </div>
</section>

<section class="final-cta">
  <div class="container">
    <div class="final-cta-eyebrow">Begin today</div>
    <h2>Start the course your <em>court partners</em> will notice.</h2>
    <p>Twelve lessons. Four modules. Lifetime access. Filmed where padel grew up.</p>
    <div class="final-cta-actions">
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary btn-large">Enrol for €59.95 <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/school/')); ?>" class="btn btn-ghost btn-large">Try the first lesson free</a>
    </div>
    <div class="trust-strip">
      <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Secure payment</div>
      <div class="trust-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 3"/></svg>Lifetime access</div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
          <span class="logo-mark">P</span>
          <div><div>Palm Coast Padel</div><small style="color: rgba(245, 239, 226, 0.6);">Academy, Marbella</small></div>
        </a>
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
