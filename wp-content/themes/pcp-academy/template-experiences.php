<?php
/*
Template Name: Experiences
*/
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<style>

/* ============================================================
   PALM COAST PADEL, design system
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
  border: 1px solid var(--court);
}
.btn-ghost:hover { background: var(--court); color: var(--cream); }
.btn-large { padding: 16px 28px; font-size: 14px; }
.btn .arrow { transition: transform 0.2s; }
.btn:hover .arrow { transform: translateX(3px); }

/* ============================================================
   SECTION SHELL
============================================================ */
section.block { padding: 120px 0; position: relative; z-index: 2; }
.dark-section { background: var(--court-deep); color: var(--cream); }
.dark-section .section-num { color: var(--clay); }
.dark-section .section-title { color: var(--cream); }
.dark-section .section-title em { color: var(--clay); font-style: italic; }
.dark-section .section-lead { color: rgba(245, 239, 226, 0.78); }

.section-num {
  font-family: 'Manrope', sans-serif;
  font-size: 11px;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--clay);
  font-weight: 600;
  margin-bottom: 28px;
  display: inline-block;
}
.section-title {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: clamp(40px, 5vw, 64px);
  line-height: 1.05;
  letter-spacing: -0.02em;
  color: var(--court-deep);
  max-width: 920px;
  margin-bottom: 32px;
}
.section-title em { font-style: italic; color: var(--clay); }
.section-lead {
  font-size: 18px;
  line-height: 1.6;
  color: var(--ink-soft);
  max-width: 720px;
  margin-bottom: 56px;
}

/* ============================================================
   PAGE HEADER
============================================================ */
.page-header {
  padding: 80px 0 96px;
  border-bottom: 1px solid var(--line);
  position: relative;
  z-index: 2;
}
.page-header-eyebrow {
  font-size: 11px;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--clay);
  font-weight: 600;
  margin-bottom: 24px;
  display: inline-flex;
  align-items: center;
  gap: 12px;
}
.page-header-eyebrow span {
  width: 28px; height: 1px;
  background: var(--clay);
  display: inline-block;
}
.page-title {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: clamp(56px, 7vw, 96px);
  line-height: 1;
  letter-spacing: -0.025em;
  color: var(--court-deep);
  margin-bottom: 32px;
  max-width: 1000px;
}
.page-title em { font-style: italic; color: var(--clay); }
.page-sub {
  font-size: 19px;
  line-height: 1.6;
  color: var(--ink-soft);
  max-width: 680px;
}

/* ============================================================
   AUTHORITY STRIP
============================================================ */
.authority {
  background: var(--court-deep);
  color: var(--cream);
  padding: 22px 0;
  overflow: hidden;
  position: relative;
  z-index: 2;
}
.authority-track {
  display: flex;
  gap: 64px;
  white-space: nowrap;
  animation: scroll 50s linear infinite;
  width: max-content;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 0.04em;
  align-items: center;
}
.authority-track em { font-family: 'Fraunces', serif; font-style: italic; color: var(--clay); font-size: 15px; font-weight: 400; }
.authority-track span { display: inline-flex; align-items: center; gap: 16px; }
.authority-dot { width: 5px; height: 5px; background: var(--clay); border-radius: 50%; flex-shrink: 0; }
@keyframes scroll {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}

/* ============================================================
   FOOTER
============================================================ */
footer {
  background: var(--court-deep);
  color: var(--cream);
  padding: 80px 0 32px;
  position: relative;
  z-index: 2;
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
   PAGE SPECIFIC, EXPERIENCES
============================================================ */

/* INTRO BLOCK */
.intro-block { padding: 120px 0; position: relative; z-index: 2; }
.intro-grid {
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 100px;
  align-items: center;
}
.intro-text .pull {
  font-family: 'Fraunces', serif;
  font-style: italic;
  font-weight: 300;
  font-size: 38px;
  line-height: 1.2;
  color: var(--clay);
  margin-bottom: 32px;
  letter-spacing: -0.01em;
}
.intro-text p {
  font-size: 16px;
  line-height: 1.75;
  color: var(--ink-soft);
  margin-bottom: 18px;
}
.intro-visual {
  position: relative;
  aspect-ratio: 4/5;
  border-radius: 4px;
  overflow: hidden;
  background: linear-gradient(160deg, #2D4A3E 0%, #1A2C24 70%);
}
.intro-visual::before {
  content: "";
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 70% 30%, rgba(189, 111, 78, 0.35) 0%, transparent 55%),
    radial-gradient(circle at 25% 75%, rgba(245, 239, 226, 0.15) 0%, transparent 50%);
}
.intro-visual::after {
  content: "MARBELLA";
  position: absolute;
  bottom: 40px;
  left: 36px;
  font-family: 'Fraunces', serif;
  font-style: italic;
  font-size: 72px;
  font-weight: 300;
  color: var(--cream);
  line-height: 1;
  letter-spacing: -0.01em;
}
.intro-visual-coords {
  position: absolute;
  top: 36px;
  left: 36px;
  color: var(--cream);
  font-size: 11px;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  opacity: 0.8;
  line-height: 1.6;
}
.intro-visual-tag {
  position: absolute;
  top: 36px;
  right: 36px;
  font-size: 10px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--clay);
  background: rgba(245, 239, 226, 0.06);
  padding: 8px 14px;
  border: 1px solid rgba(245, 239, 226, 0.18);
  border-radius: 999px;
  font-weight: 600;
}

/* FORMATS GRID */
.formats-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
  margin-top: 56px;
}
.format-card {
  background: var(--cream);
  border: 1px solid var(--line);
  border-radius: 4px;
  padding: 0;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
}
.format-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 24px 50px -28px rgba(26, 44, 36, 0.25);
  border-color: var(--mist);
}
.format-card-accent {
  height: 6px;
  width: 100%;
}
.format-card.trip .format-card-accent { background: var(--clay); }
.format-card.clinic .format-card-accent { background: var(--court); }
.format-card.corporate .format-card-accent { background: var(--sand); }

.format-card-body {
  padding: 36px 32px 32px;
  flex: 1;
  display: flex;
  flex-direction: column;
}
.format-card-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 22px;
}
.format-num {
  font-family: 'Fraunces', serif;
  font-style: italic;
  font-size: 14px;
  color: var(--clay);
  letter-spacing: 0.06em;
  text-transform: uppercase;
}
.format-status {
  font-size: 10px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--ink-soft);
  font-weight: 600;
  background: var(--cream-soft);
  padding: 5px 11px;
  border-radius: 999px;
  border: 1px solid var(--line);
}
.format-card h3 {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: 28px;
  line-height: 1.1;
  letter-spacing: -0.01em;
  color: var(--court-deep);
  margin-bottom: 16px;
}
.format-card h3 em { font-style: italic; color: var(--clay); }
.format-card .format-desc {
  font-size: 14.5px;
  line-height: 1.7;
  color: var(--ink-soft);
  margin-bottom: 28px;
}
.format-meta {
  margin-top: auto;
  padding: 20px 0 24px;
  border-top: 1px solid var(--line);
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.meta-row {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  gap: 16px;
  font-size: 13px;
}
.meta-label {
  color: var(--ink-soft);
  letter-spacing: 0.04em;
  text-transform: uppercase;
  font-size: 10px;
  font-weight: 600;
  flex-shrink: 0;
}
.meta-value {
  color: var(--court-deep);
  text-align: right;
  font-weight: 500;
}
.format-link {
  font-family: 'Manrope', sans-serif;
  font-weight: 600;
  font-size: 12px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--court-deep);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding-top: 8px;
  transition: color 0.2s;
}
.format-link .arrow { transition: transform 0.2s; }
.format-link:hover { color: var(--clay); }
.format-link:hover .arrow { transform: translateX(3px); }

/* WAITLIST BLOCK */
.waitlist-block { padding: 120px 0; }
.waitlist-inner {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 80px;
  align-items: start;
}
.waitlist-text h2 {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: clamp(40px, 5vw, 60px);
  line-height: 1.05;
  letter-spacing: -0.02em;
  color: var(--cream);
  margin-bottom: 28px;
}
.waitlist-text h2 em { font-style: italic; color: var(--clay); }
.waitlist-text p {
  font-size: 17px;
  line-height: 1.65;
  color: rgba(245, 239, 226, 0.78);
  margin-bottom: 28px;
  max-width: 480px;
}
.waitlist-text .small-note {
  font-size: 13px;
  color: rgba(245, 239, 226, 0.5);
  letter-spacing: 0.02em;
  line-height: 1.6;
  max-width: 460px;
}
.waitlist-form {
  background: rgba(245, 239, 226, 0.04);
  border: 1px solid rgba(245, 239, 226, 0.14);
  border-radius: 6px;
  padding: 40px;
}
.waitlist-form-label {
  font-size: 11px;
  letter-spacing: 0.24em;
  text-transform: uppercase;
  color: var(--clay);
  font-weight: 600;
  margin-bottom: 12px;
}
.waitlist-form h3 {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: 24px;
  line-height: 1.2;
  color: var(--cream);
  margin-bottom: 28px;
  letter-spacing: -0.01em;
}
.waitlist-form input[type="text"],
.waitlist-form input[type="email"] {
  width: 100%;
  padding: 14px 18px;
  border: 1px solid rgba(245, 239, 226, 0.2);
  border-radius: 4px;
  background: rgba(245, 239, 226, 0.04);
  font: inherit;
  font-size: 14px;
  color: var(--cream);
  margin-bottom: 12px;
  outline: none;
  transition: border 0.2s, background 0.2s;
}
.waitlist-form input::placeholder { color: rgba(245, 239, 226, 0.4); }
.waitlist-form input:focus {
  border-color: var(--clay);
  background: rgba(245, 239, 226, 0.07);
}
.checkbox-group {
  margin: 20px 0 24px;
}
.checkbox-group-label {
  font-size: 11px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: rgba(245, 239, 226, 0.6);
  font-weight: 600;
  margin-bottom: 14px;
}
.checkbox-row {
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.checkbox-row label {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 14px;
  color: rgba(245, 239, 226, 0.85);
  cursor: pointer;
  padding: 10px 14px;
  border: 1px solid rgba(245, 239, 226, 0.12);
  border-radius: 4px;
  transition: border 0.2s, background 0.2s;
}
.checkbox-row label:hover {
  border-color: rgba(245, 239, 226, 0.28);
  background: rgba(245, 239, 226, 0.04);
}
.checkbox-row input[type="checkbox"] {
  appearance: none;
  -webkit-appearance: none;
  width: 16px;
  height: 16px;
  border: 1px solid rgba(245, 239, 226, 0.4);
  border-radius: 3px;
  background: transparent;
  cursor: pointer;
  position: relative;
  transition: all 0.2s;
  flex-shrink: 0;
}
.checkbox-row input[type="checkbox"]:checked {
  background: var(--clay);
  border-color: var(--clay);
}
.checkbox-row input[type="checkbox"]:checked::after {
  content: "";
  position: absolute;
  left: 4px;
  top: 1px;
  width: 5px;
  height: 9px;
  border: solid var(--cream);
  border-width: 0 1.5px 1.5px 0;
  transform: rotate(45deg);
}
.waitlist-form button {
  width: 100%;
  margin-top: 8px;
}
.waitlist-form-note {
  font-size: 11px;
  color: rgba(245, 239, 226, 0.45);
  margin-top: 16px;
  text-align: center;
  line-height: 1.5;
}

/* CTA BLOCK (cross-sell) */
.final-cta {
  text-align: center;
  padding: 140px 0 120px;
  position: relative;
  z-index: 2;
}
.final-cta-eyebrow {
  font-size: 11px;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--clay);
  font-weight: 600;
  margin-bottom: 24px;
}
.final-cta h2 {
  font-family: 'Fraunces', serif;
  font-weight: 400;
  font-size: clamp(44px, 5.5vw, 72px);
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--court-deep);
  margin: 0 auto 24px;
  max-width: 880px;
}
.final-cta h2 em { font-style: italic; color: var(--clay); }
.final-cta p {
  font-size: 18px;
  color: var(--ink-soft);
  max-width: 600px;
  margin: 0 auto 36px;
}
.final-cta-actions {
  display: flex;
  gap: 14px;
  justify-content: center;
  flex-wrap: wrap;
}

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
  .intro-block { padding: 80px 0; }
  .intro-grid { grid-template-columns: 1fr; gap: 56px; }
  .formats-grid { grid-template-columns: 1fr; gap: 20px; }
  .waitlist-block { padding: 80px 0; }
  .waitlist-inner { grid-template-columns: 1fr; gap: 48px; }
  .waitlist-form { padding: 32px 24px; }
  .final-cta { padding: 80px 0; }
}
@media (max-width: 600px) {
  .footer-grid { grid-template-columns: 1fr; }
  .final-cta-actions { flex-direction: column; align-items: stretch; }
  .final-cta-actions .btn { justify-content: center; }
}


</style>



<header class="topbar">
  <div class="container topbar-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <span class="logo-mark">P</span>
      <div>
        <div>Palm Coast Padel</div>
        <small>Marbella, Costa del Sol</small>
      </div>
    </a>
    <nav class="nav">
      <a href="<?php echo esc_url(home_url('/course/')); ?>">Course</a>
      <a href="<?php echo esc_url(home_url('/coach/')); ?>">The Coach</a>
      <a href="<?php echo esc_url(home_url('/stories/')); ?>">Stories</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/experiences/')); ?>" class="active">Experiences</a>
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

<section class="page-header">
  <div class="container">
    <div class="page-header-eyebrow"><span></span> Experiences, Marbella</div>
    <h1 class="page-title">The other half of <em>Palm Coast Padel</em>.</h1>
    <p class="page-sub">The academy teaches the game online. The wider Palm Coast Padel operation runs the in person side. Three formats are being prepared for launch. Padel trips, clinics and lessons, and corporate events, all anchored at Palm Coast Club on the Costa del Sol.</p>
  </div>
</section>

<div class="authority">
  <div class="authority-track">
    <span>Filmed in <em>Marbella</em>, taught in Marbella</span><span class="authority-dot"></span>
    <span>Three structured <em>formats</em>, opening 2026</span><span class="authority-dot"></span>
    <span>Coached by <em>Yannik Molina</em> and the Palm Coast team</span><span class="authority-dot"></span>
    <span>Reservations open <em>summer</em> 2026</span><span class="authority-dot"></span>
    <span>Filmed in <em>Marbella</em>, taught in Marbella</span><span class="authority-dot"></span>
    <span>Three structured <em>formats</em>, opening 2026</span><span class="authority-dot"></span>
    <span>Coached by <em>Yannik Molina</em> and the Palm Coast team</span><span class="authority-dot"></span>
    <span>Reservations open <em>summer</em> 2026</span><span class="authority-dot"></span>
  </div>
</div>

<section class="intro-block">
  <div class="container intro-grid">
    <div class="intro-text">
      <p class="pull">"The academy is where it starts. Marbella is where it lands."</p>
      <p>Most students who finish the Initiation course want to spend time on a Marbella court within the year. Until now, that flow has been informal. Players email, the club arranges what it can, and visits happen one at a time.</p>
      <p>Three formats are being formalised to handle this properly. Each is anchored at Palm Coast Club. Each is taught by Yannik and the coaching team. Each draws from the same curriculum the academy is filmed from. The booking pages, with availability and rates, open ahead of summer 2026.</p>
      <p>The Marbella operation is not a new business. It is the side of Palm Coast Padel that has always existed off camera. The pages below are how it becomes accessible to anyone who finds the academy first.</p>
    </div>
    <div class="intro-visual" aria-hidden="true">
      <div class="intro-visual-coords">36.510° N, 4.886° W<br>Costa del Sol, España</div>
      <div class="intro-visual-tag">In production</div>
    </div>
  </div>
</section>

<section class="block" style="background: var(--cream-soft);">
  <div class="container">
    <span class="section-num">01, the three formats</span>
    <h2 class="section-title">Three ways <em>into the operation</em>.</h2>
    <p class="section-lead">Each format has its own audience, structure, and pricing. The full pages, with availability and rates, open ahead of summer 2026. Add your email below to be notified when each one goes live.</p>

    <div class="formats-grid">

      <article class="format-card trip">
        <div class="format-card-accent"></div>
        <div class="format-card-body">
          <div class="format-card-head">
            <div class="format-num">Format i.</div>
            <div class="format-status">Coming soon</div>
          </div>
          <h3>Padel <em>trips</em></h3>
          <p class="format-desc">Three to seven days on the Costa del Sol. Court time, coaching, and accommodation arranged around the same curriculum the academy is filmed from. For players who want to spend a week inside the sport.</p>
          <div class="format-meta">
            <div class="meta-row">
              <span class="meta-label">Audience</span>
              <span class="meta-value">Players who have completed the course</span>
            </div>
            <div class="meta-row">
              <span class="meta-label">Format</span>
              <span class="meta-value">Multi day, group or individual</span>
            </div>
            <div class="meta-row">
              <span class="meta-label">Opens</span>
              <span class="meta-value">Summer 2026</span>
            </div>
          </div>
          <a href="#waitlist" class="format-link">Waitlist <span class="arrow">→</span></a>
        </div>
      </article>

      <article class="format-card clinic">
        <div class="format-card-accent"></div>
        <div class="format-card-body">
          <div class="format-card-head">
            <div class="format-num">Format ii.</div>
            <div class="format-status">Coming soon</div>
          </div>
          <h3>Clinics and <em>Lessons</em></h3>
          <p class="format-desc">Drop in clinics for visiting players. Private one to one coaching with Yannik. Structured improvement blocks for repeat guests. Booked by the session or in packages.</p>
          <div class="format-meta">
            <div class="meta-row">
              <span class="meta-label">Audience</span>
              <span class="meta-value">Visitors to Marbella, single or repeat</span>
            </div>
            <div class="meta-row">
              <span class="meta-label">Format</span>
              <span class="meta-value">Hourly, session, or block</span>
            </div>
            <div class="meta-row">
              <span class="meta-label">Opens</span>
              <span class="meta-value">Summer 2026</span>
            </div>
          </div>
          <a href="#waitlist" class="format-link">Waitlist <span class="arrow">→</span></a>
        </div>
      </article>

      <article class="format-card corporate">
        <div class="format-card-accent"></div>
        <div class="format-card-body">
          <div class="format-card-head">
            <div class="format-num">Format iii.</div>
            <div class="format-status">Coming soon</div>
          </div>
          <h3>Corporate <em>events</em></h3>
          <p class="format-desc">Bring a team to Marbella. Half day and full day formats with court time, coaching, and catering. Built for offsites, leadership retreats, and client hospitality.</p>
          <div class="format-meta">
            <div class="meta-row">
              <span class="meta-label">Audience</span>
              <span class="meta-value">Companies, teams, leadership groups</span>
            </div>
            <div class="meta-row">
              <span class="meta-label">Format</span>
              <span class="meta-value">Half or full day, custom</span>
            </div>
            <div class="meta-row">
              <span class="meta-label">Opens</span>
              <span class="meta-value">Summer 2026</span>
            </div>
          </div>
          <a href="#waitlist" class="format-link">Waitlist <span class="arrow">→</span></a>
        </div>
      </article>

    </div>
  </div>
</section>

<section class="block dark-section waitlist-block" id="waitlist">
  <div class="container waitlist-inner">
    <div class="waitlist-text">
      <span class="section-num">02, reservations</span>
      <h2>Be the first to know when the booking pages <em>go live</em>.</h2>
      <p>One email per format when it opens. Pricing, availability, and the booking flow will all be shared in that single message. No marketing in between.</p>
      <p class="small-note">Tell us which formats interest you so the notification arrives at the right time. You will not be added to any general mailing list.</p>
    </div>
    <form class="waitlist-form" onsubmit="event.preventDefault();">
      <div class="waitlist-form-label">Notify me when ready</div>
      <h3>Reserve your place on the waitlist.</h3>
      <input type="text" placeholder="Your name" aria-label="Your name" required>
      <input type="email" placeholder="Your email" aria-label="Your email" required>
      <div class="checkbox-group">
        <div class="checkbox-group-label">Notify me about</div>
        <div class="checkbox-row">
          <label><input type="checkbox" name="format" value="trips"> Padel trips</label>
          <label><input type="checkbox" name="format" value="clinics"> Clinics and Lessons</label>
          <label><input type="checkbox" name="format" value="corporate"> Corporate events</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-large">Add me to the waitlist <span class="arrow">→</span></button>
      <div class="waitlist-form-note">No spam. One email per format when it opens.</div>
    </form>
  </div>
</section>

<section class="final-cta">
  <div class="container">
    <div class="final-cta-eyebrow">While you wait</div>
    <h2>Start the course that takes you <em>to the courts</em>.</h2>
    <p>Twelve lessons. Four modules. Filmed at Palm Coast Club, taught by the coach you will meet in Marbella.</p>
    <div class="final-cta-actions">
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-primary btn-large">Enrol for €59.95 <span class="arrow">→</span></a>
      <a href="<?php echo esc_url(home_url('/course/')); ?>" class="btn btn-ghost btn-large">See the curriculum</a>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
          <span class="logo-mark">P</span>
          <div><div>Palm Coast Padel</div><small style="color: rgba(245, 239, 226, 0.6);">Marbella, Costa del Sol</small></div>
        </a>
        <p>The Marbella padel operation. Teaching the game from where it grew up, online and in person.</p>
      </div>
      <div class="footer-col"><h4>Academy</h4><ul>
        <li><a href="<?php echo esc_url(home_url('/course/')); ?>">Initiation course</a></li>
        <li><a href="<?php echo esc_url(home_url('/coach/')); ?>">The coach</a></li>
        <li><a href="<?php echo esc_url(home_url('/stories/')); ?>">Student stories</a></li>
        <li><a href="<?php echo esc_url(home_url('/school/')); ?>">Free first lesson</a></li>
      </ul></div>
      <div class="footer-col"><h4>Experiences</h4><ul>
        <li><a href="experiences.html#waitlist">Padel trips</a></li>
        <li><a href="experiences.html#waitlist">Clinics and Lessons</a></li>
        <li><a href="experiences.html#waitlist">Corporate events</a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About the operation</a></li>
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
