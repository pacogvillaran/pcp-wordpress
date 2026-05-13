<?php
/*
Template Name: Coach
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
      <a href="<?php echo esc_url(home_url('/coach/')); ?>" class="active">The Coach</a>
      <a href="<?php echo esc_url(home_url('/stories/')); ?>">Stories</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
    <div class="top-right">
      <div class="lang"><button class="current">EN</button><button>ES</button><button>FR</button></div>
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary">Enrol now <span class="arrow">→</span></a>
    </div>
  </div>
</header>

<section class="coach-hero">
  <div class="container coach-hero-grid">
    <div>
      <div class="coach-hero-eyebrow"><span></span> Head coach, Palm Coast Padel Academy</div>
      <h1 class="coach-h1"><em>Yannik</em><br>Molina.</h1>
      <p class="coach-hero-role">Former German national team competitor. Coach across Germany, Sweden, Kuwait, and Spain. Now teaching from Marbella.</p>
    </div>
    <div class="coach-hero-portrait" aria-hidden="true">
      <div class="coach-hero-portrait-label">
        <span>Yannik Molina</span>
        <span>Marbella</span>
      </div>
    </div>
  </div>
</section>

<section class="numbers-strip">
  <div class="container numbers-grid">
    <div class="number-item">
      <div class="num"><em>12</em></div>
      <div class="lbl">Years on court</div>
    </div>
    <div class="number-item">
      <div class="num"><em>4</em></div>
      <div class="lbl">Countries coached in</div>
    </div>
    <div class="number-item">
      <div class="num"><em>1</em></div>
      <div class="lbl">National team selection</div>
    </div>
    <div class="number-item">
      <div class="num"><em>500</em>+</div>
      <div class="lbl">Players taught, in person</div>
    </div>
  </div>
</section>

<section class="bio-chapter">
  <div class="container">
    <div class="bio-chapter-grid">
      <div class="bio-chapter-meta">
        <div class="bio-chapter-num">Chapter 01</div>
        <div class="bio-chapter-title">The <em>player</em>.</div>
      </div>
      <div class="bio-chapter-body">
        <p>Yannik Molina started playing tennis at six and switched to padel at seventeen. The transition was decisive. Within three years he was competing on the German national circuit. Within five he was selected for the German national team and competed at European Championship level.</p>
        <p>He played through a period when padel was still an emerging sport in northern Europe. The training infrastructure was minimal, the coaching was inconsistent, and most of the technique he refined came from travelling to Spain to train with Spanish coaches and watch Spanish players. That experience, learning the game from the country that built it, became the foundation of how he teaches today.</p>
        <p>By his mid twenties he had decided to coach. Not because the playing career had run out, but because he had become more interested in how the sport was taught than in how it was won.</p>
      </div>
    </div>
  </div>
</section>

<section class="bio-chapter">
  <div class="container">
    <div class="bio-chapter-grid">
      <div class="bio-chapter-meta">
        <div class="bio-chapter-num">Chapter 02</div>
        <div class="bio-chapter-title">The <em>coach</em>.</div>
      </div>
      <div class="bio-chapter-body">
        <p>The first ten years of coaching took Yannik through three countries and several hundred players. He coached in Germany, where padel was a curiosity finding its first audience. He coached in Sweden, where a wave of Scandinavian interest was producing the next generation of European tournament players. He coached in Kuwait, where padel was being adopted at a speed that turned a handful of clubs into a regional scene in under three years.</p>
        <p>Each country taught him something specific. In Germany he learned how to coach players who needed structure to feel confident. In Sweden he learned how to coach players who improved fastest when they were given freedom to experiment. In Kuwait he learned how to teach the game from scratch to people who had never seen it played.</p>
        <p>By 2021 he had a method. A way of starting players from absolute zero and getting them to a complete first match in a defined number of lessons. The Initiation to Padel curriculum is a structured version of that method, broken into twelve filmed lessons.</p>
      </div>
    </div>
  </div>
</section>

<section class="bio-chapter">
  <div class="container">
    <div class="bio-chapter-grid">
      <div class="bio-chapter-meta">
        <div class="bio-chapter-num">Chapter 03</div>
        <div class="bio-chapter-title">Why <em>Marbella</em>.</div>
      </div>
      <div class="bio-chapter-body">
        <p>In 2021 Yannik moved to Marbella. The decision was simple. Spain is where padel was built, the Costa del Sol is where the technique was refined, and the level of play within a fifty kilometre radius of Marbella is higher than anywhere else in Europe. To coach at the level he wanted to coach at, he needed to be on courts where the game was being played at the level he wanted to teach.</p>
        <p>Five years later he runs the head coaching role at Palm Coast Padel, manages a coaching team of four, and built the curriculum that the academy now teaches online. He still plays in regional tournaments, still trains daily, and still believes that the best coaches are the ones who spend most of their time on court.</p>
        <p>The Initiation course is the first time the curriculum has been delivered outside Marbella. The next step is two follow on courses, Intermediate and Pro Masterclass, in production for early 2027.</p>
      </div>
    </div>
  </div>
</section>

<section class="manifesto">
  <div class="container">
    <p class="manifesto-text">"Padel is not a sport you learn from a book. It is a sport you learn by watching someone else play, then trying it, then watching again. <em>The course is built that way</em>."</p>
    <div class="manifesto-attribution">Yannik Molina, head coach</div>
  </div>
</section>

<section class="block">
  <div class="container">
    <span class="section-num">04, the record</span>
    <h2 class="section-title">Credentials, in <em>full</em>.</h2>
    <p class="section-lead">For full transparency, the complete record. Every coach should be checkable.</p>

    <div class="credentials-grid">
      <div class="cred-item">
        <div class="lbl">Playing record</div>
        <div class="val"><em>German national team</em></div>
        <div class="sub">European Championship competitor. National circuit, multiple seasons. Highest national ranking, top thirty.</div>
      </div>
      <div class="cred-item">
        <div class="lbl">Coaching qualification</div>
        <div class="val">FEP certified, <em>level 2</em></div>
        <div class="sub">Federación Española de Pádel certification. Recognised across the European padel federation network.</div>
      </div>
      <div class="cred-item">
        <div class="lbl">Coaching countries</div>
        <div class="val">Germany, Sweden, <em>Kuwait, Spain</em></div>
        <div class="sub">Ten years of in person coaching across club, federation, and private settings. Players from absolute beginner to tournament finalist.</div>
      </div>
      <div class="cred-item">
        <div class="lbl">Languages</div>
        <div class="val">English, German, <em>Spanish</em></div>
        <div class="sub">The Initiation course is taught and narrated in three languages. Subtitles available in all three.</div>
      </div>
      <div class="cred-item">
        <div class="lbl">Currently based</div>
        <div class="val"><em>Marbella</em>, Spain</div>
        <div class="sub">Head coach at Palm Coast Padel since 2021. On court, at the club, every weekday.</div>
      </div>
      <div class="cred-item">
        <div class="lbl">Available for</div>
        <div class="val">Online course, <em>private clinics</em></div>
        <div class="sub">In person clinics in Marbella by appointment. Online course delivered globally. Live group sessions in production for 2027.</div>
      </div>
    </div>
  </div>
</section>

<section class="block dark-section" style="text-align: center;">
  <div class="container container-narrow">
    <span class="section-num">05, train with Yannik</span>
    <h2 class="section-title" style="margin-left: auto; margin-right: auto;">Twelve lessons, taught by the coach <em>himself</em>.</h2>
    <p class="section-lead" style="margin-left: auto; margin-right: auto; text-align: center;">The same method Yannik uses on court at Palm Coast Club, restructured for someone who has never played. Lifetime access for €59.95.</p>
    <div style="margin-top: 36px; display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary btn-large">Begin the course <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-ghost btn-large" style="border-color: var(--cream); color: var(--cream);">Enquire about private coaching</a>
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


<?php
get_footer();
