<?php
/*
Template Name: Stories
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
      <a href="<?php echo esc_url(home_url('/stories/')); ?>" class="active">Stories</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
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
    <div class="page-header-eyebrow"><span></span> Student stories</div>
    <h1 class="page-title">From first racket, to <em>first tournament</em>.</h1>
    <p class="page-sub">Real students, named, located, with the outcome they reached. Every story below is verified through course completion. The course is built to produce results, and the results should be visible.</p>
  </div>
</section>

<div class="stats-overview">
  <div class="container stats-overview-grid">
    <div class="stat-item">
      <div class="num"><em>800</em>+</div>
      <div class="lbl">Students enrolled</div>
    </div>
    <div class="stat-item">
      <div class="num"><em>32</em></div>
      <div class="lbl">Countries reached</div>
    </div>
    <div class="stat-item">
      <div class="num"><em>87</em>%</div>
      <div class="lbl">Course completion rate</div>
    </div>
    <div class="stat-item">
      <div class="num"><em>4.8</em>/5</div>
      <div class="lbl">Average rating, verified</div>
    </div>
  </div>
</div>

<section class="featured-story">
  <div class="container featured-grid">
    <div class="featured-visual" aria-hidden="true">
      <span class="featured-tag">Featured story</span>
      <div class="featured-meta-tag">
        <span>Lukas Andersson</span>
        <span>Stockholm, Sweden</span>
      </div>
    </div>
    <div class="featured-content">
      <div class="eyebrow">Featured · April 2026</div>
      <h2>"I won my first <em>tournament</em> nine months after I started the course."</h2>
      <p class="lede">Lukas Andersson had played racket sports since childhood. When his local club in Stockholm opened padel courts, he assumed his tennis background would carry. It did not.</p>
      <p>"I lost three matches in a row to people who had been playing for less than a year. I was hitting hard but I had no idea where to be on the court. Padel and tennis look similar from outside. They are not the same sport."</p>
      <p>Lukas signed up for the Initiation course in July 2025 after a friend who had taken it told him the positioning module was the part of his game that needed work. He completed the course in three weeks.</p>
      <p>"I went back onto a court a different player. The shots were not the difference. The walking was. I knew where to stand, where to move after my partner hit, and when to step forward. By December I was winning my regular doubles. By April I had taken my first tournament at amateur level."</p>
      <div class="featured-byline">
        <span><strong>Lukas Andersson</strong>Stockholm, Sweden</span>
        <span><strong>April 2026</strong>Course completed July 2025</span>
        <span><strong>Outcome</strong>First amateur tournament won</span>
      </div>
    </div>
  </div>
</section>

<section class="block">
  <div class="container">
    <span class="section-num">02, more stories</span>
    <h2 class="section-title">Eight more students, in their <em>own words</em>.</h2>
    <p class="section-lead">Each story below is a separate person, in a separate country, with a separate result. Verified through the platform.</p>

    <div class="stories-grid">
      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">CK</div>
          <div class="story-meta">
            <div class="name">Camille Köhler</div>
            <div class="place"><strong>Berlin, Germany</strong> · Started April 2026</div>
          </div>
        </div>
        <p class="story-quote">"I had never held a padel racket. <em>I finished the course in three weekends</em> and played my first match the next Saturday. I knew where to stand, which was the part I was most worried about."</p>
        <p class="story-detail">Came to padel after years of tennis. Wanted a structured introduction before booking her first court session.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">First match, three weeks</div>
        </div>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">AR</div>
          <div class="story-meta">
            <div class="name">Anders Riis</div>
            <div class="place"><strong>Copenhagen, Denmark</strong> · Started February 2026</div>
          </div>
        </div>
        <p class="story-quote">"<em>The lessons on positioning</em> were the difference. I was running the court before. Now I let the ball come to me. My partner finally enjoys playing with me."</p>
        <p class="story-detail">Had been playing socially for two years. Took the course to fix specific weaknesses he could feel but not name.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">Joined club tournament ladder</div>
        </div>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">SV</div>
          <div class="story-meta">
            <div class="name">Sofia Vásquez</div>
            <div class="place"><strong>Madrid, Spain</strong> · Started January 2026</div>
          </div>
        </div>
        <p class="story-quote">"Most lessons online are someone speaking over a slideshow. Yannik shows the shot, then walks you through what your body should be doing. <em>It is the next best thing to being there</em>."</p>
        <p class="story-detail">Spanish national, lives 600 kilometres from Marbella, wanted court ready instruction before booking lessons locally.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">Plays twice a week, locally</div>
        </div>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">MO</div>
          <div class="story-meta">
            <div class="name">Mathieu Olivier</div>
            <div class="place"><strong>Lyon, France</strong> · Started March 2026</div>
          </div>
        </div>
        <p class="story-quote">"I came to padel from squash. The course saved me from <em>three months of bad habits</em>. Squash technique kills your padel. Yannik unteaches it before he teaches you anything else."</p>
        <p class="story-detail">Twenty year squash player. Took the course on a colleague's recommendation, completed in eight days.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">Now plays only padel</div>
        </div>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">EH</div>
          <div class="story-meta">
            <div class="name">Eva Hartmann</div>
            <div class="place"><strong>Vienna, Austria</strong> · Started December 2025</div>
          </div>
        </div>
        <p class="story-quote">"I am 58. Most padel content online is for athletic men under 30. <em>This course assumed I could learn</em>. The pace was right and the explanations were clear. Big difference."</p>
        <p class="story-detail">Discovered padel through her son. Wanted instruction designed for someone starting in their fifties.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">Plays weekly with her son</div>
        </div>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">JV</div>
          <div class="story-meta">
            <div class="name">João Vieira</div>
            <div class="place"><strong>Lisbon, Portugal</strong> · Started June 2025</div>
          </div>
        </div>
        <p class="story-quote">"I bought the course on Saturday and was on a court on Sunday. <em>By Monday I was hooked</em>. By the end of the year I had played a hundred matches. Best 60 euros I have spent on anything sport related."</p>
        <p class="story-detail">Former amateur footballer looking for a low impact alternative. Plays four times a week now.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">100 matches in 6 months</div>
        </div>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">PD</div>
          <div class="story-meta">
            <div class="name">Priya Desai</div>
            <div class="place"><strong>London, United Kingdom</strong> · Started October 2025</div>
          </div>
        </div>
        <p class="story-quote">"Padel is exploding in London but the courts are full and lessons are expensive. <em>Doing the theory online</em> meant I walked onto my first court already knowing the rules and the basic strokes. Saved me hundreds of pounds in lessons."</p>
        <p class="story-detail">Took the course as cost effective preparation before booking a single in person clinic in London.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">Member, Hurlingham Club</div>
        </div>
      </article>

      <article class="story-card">
        <div class="story-head">
          <div class="story-avatar">TH</div>
          <div class="story-meta">
            <div class="name">Tomás Herrera</div>
            <div class="place"><strong>Mexico City, Mexico</strong> · Started August 2025</div>
          </div>
        </div>
        <p class="story-quote">"Padel was invented in Mexico but most coaches here are self taught. <em>This course gave me the structured fundamentals</em> I could not find locally. Now I coach a few friends on weekends using what I learned."</p>
        <p class="story-detail">Took the course twice. First as a student, second as preparation to introduce his own group of friends to the sport.</p>
        <div class="story-result">
          <div class="lhs">Outcome</div>
          <div class="rhs">Coaching weekend group</div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="video-stories">
  <div class="container">
    <span class="section-num">03, on camera</span>
    <h2 class="section-title">Three students, <em>filmed in Marbella</em>.</h2>
    <p class="section-lead">Online graduates who came to the Costa del Sol for an in person clinic, filmed during their visit. The bridge between the academy and the club, in their own words.</p>

    <div class="video-grid">
      <div class="video-card">
        <span class="video-duration">2:14</span>
        <div class="video-play"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
        <div class="video-meta">
          <div class="name">Henrik <em>Larsen</em></div>
          <div class="sub">Oslo, Norway</div>
        </div>
      </div>
      <div class="video-card alt-1">
        <span class="video-duration">3:02</span>
        <div class="video-play"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
        <div class="video-meta">
          <div class="name">Marina <em>Esposito</em></div>
          <div class="sub">Milan, Italy</div>
        </div>
      </div>
      <div class="video-card alt-2">
        <span class="video-duration">1:48</span>
        <div class="video-play"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
        <div class="video-meta">
          <div class="name">Daniel <em>Brouwer</em></div>
          <div class="sub">Amsterdam, Netherlands</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="block dark-section" style="text-align: center;">
  <div class="container container-narrow">
    <span class="section-num">04, your story</span>
    <h2 class="section-title" style="margin-left: auto; margin-right: auto;">The next student is <em>you</em>.</h2>
    <p class="section-lead" style="margin-left: auto; margin-right: auto; text-align: center;">Twelve lessons. Four modules. Lifetime access. Filmed in Marbella, taught by Yannik.</p>
    <div style="margin-top: 36px; display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary btn-large">Enrol for €59.95 <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/school/')); ?>" class="btn btn-ghost btn-large" style="border-color: var(--cream); color: var(--cream);">Try the first lesson free</a>
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
