<?php
/*
Template Name: For Clubs
*/
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>

<style>
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

.topbar { position: sticky; top: 0; z-index: 100; background: rgba(245, 239, 226, 0.92); border-bottom: 1px solid var(--line); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
.topbar-inner { display: flex; align-items: center; justify-content: space-between; padding: 20px 0; }
.logo { font-family: 'Fraunces', serif; font-weight: 500; font-size: 19px; letter-spacing: 0.02em; color: var(--court-deep); display: flex; align-items: center; gap: 10px; }
.logo-mark { width: 32px; height: 32px; border: 1.2px solid var(--court); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 14px; font-style: italic; color: var(--court); }
.logo small { display: block; font-family: 'Manrope', sans-serif; font-size: 10px; font-weight: 500; letter-spacing: 0.22em; text-transform: uppercase; color: var(--ink-soft); margin-top: 2px; }
.nav { display: flex; gap: 30px; font-size: 14px; font-weight: 500; }
.nav a { color: var(--ink-soft); transition: color 0.2s; position: relative; white-space: nowrap; }
.nav a:hover { color: var(--court); }
.nav a.active { color: var(--court-deep); }
.nav a.active::after { content: ""; position: absolute; bottom: -22px; left: 0; right: 0; height: 1px; background: var(--court); }
.top-right { display: flex; align-items: center; gap: 24px; }
.lang { display: flex; gap: 8px; font-size: 12px; font-weight: 600; letter-spacing: 0.1em; color: var(--ink-soft); }
.lang button { background: none; border: none; cursor: pointer; color: inherit; font: inherit; padding: 4px 6px; transition: color 0.2s; }
.lang button.current { color: var(--court-deep); border-bottom: 1px solid var(--court); }
.lang button:hover { color: var(--court); }

.btn { display: inline-flex; align-items: center; gap: 10px; padding: 12px 22px; border-radius: 999px; font-family: 'Manrope', sans-serif; font-weight: 600; font-size: 13px; letter-spacing: 0.04em; cursor: pointer; transition: all 0.25s ease; border: none; text-transform: uppercase; }
.btn-primary { background: var(--court-deep); color: var(--cream); }
.btn-primary:hover { background: var(--clay); transform: translateY(-1px); }
.btn-ghost { background: transparent; color: var(--court-deep); border: 1px solid var(--court); }
.btn-ghost:hover { background: var(--court); color: var(--cream); }
.btn-large { padding: 16px 28px; font-size: 14px; }
.btn .arrow { transition: transform 0.2s; }
.btn:hover .arrow { transform: translateX(3px); }

section.block { padding: 120px 0; position: relative; z-index: 2; }
.dark-section { background: var(--court-deep); color: var(--cream); }
.dark-section .section-num { color: var(--clay); }
.dark-section .section-title { color: var(--cream); }
.dark-section .section-title em { color: var(--clay); font-style: italic; }
.dark-section .section-lead { color: rgba(245, 239, 226, 0.78); }
.section-num { font-family: 'Manrope', sans-serif; font-size: 11px; letter-spacing: 0.28em; text-transform: uppercase; color: var(--clay); font-weight: 600; margin-bottom: 28px; display: inline-block; }
.section-title { font-family: 'Fraunces', serif; font-weight: 400; font-size: clamp(40px, 5vw, 64px); line-height: 1.05; letter-spacing: -0.02em; color: var(--court-deep); max-width: 920px; margin-bottom: 32px; }
.section-title em { font-style: italic; color: var(--clay); }
.section-lead { font-size: 18px; line-height: 1.6; color: var(--ink-soft); max-width: 720px; margin-bottom: 56px; }

.page-header { padding: 80px 0 96px; border-bottom: 1px solid var(--line); position: relative; z-index: 2; }
.page-header-eyebrow { font-size: 11px; letter-spacing: 0.28em; text-transform: uppercase; color: var(--clay); font-weight: 600; margin-bottom: 24px; display: inline-flex; align-items: center; gap: 12px; }
.page-header-eyebrow span { width: 28px; height: 1px; background: var(--clay); display: inline-block; }
.page-title { font-family: 'Fraunces', serif; font-weight: 400; font-size: clamp(56px, 7vw, 96px); line-height: 1; letter-spacing: -0.025em; color: var(--court-deep); margin-bottom: 32px; max-width: 1000px; }
.page-title em { font-style: italic; color: var(--clay); }
.page-sub { font-size: 19px; line-height: 1.6; color: var(--ink-soft); max-width: 720px; }

.authority { background: var(--court-deep); color: var(--cream); padding: 22px 0; overflow: hidden; position: relative; z-index: 2; }
.authority-track { display: flex; gap: 64px; white-space: nowrap; animation: scroll 50s linear infinite; width: max-content; font-size: 13px; font-weight: 500; letter-spacing: 0.04em; align-items: center; }
.authority-track em { font-family: 'Fraunces', serif; font-style: italic; color: var(--clay); font-size: 15px; font-weight: 400; }
.authority-track span { display: inline-flex; align-items: center; gap: 16px; }
.authority-dot { width: 5px; height: 5px; background: var(--clay); border-radius: 50%; flex-shrink: 0; }
@keyframes scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

footer { background: var(--court-deep); color: var(--cream); padding: 80px 0 32px; position: relative; z-index: 2; }
.footer-grid { display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 60px; padding-bottom: 60px; border-bottom: 1px solid rgba(245, 239, 226, 0.15); }
.footer-brand .logo { color: var(--cream); margin-bottom: 20px; }
.footer-brand .logo-mark { border-color: var(--clay); color: var(--clay); }
.footer-brand p { font-size: 14px; color: rgba(245, 239, 226, 0.65); line-height: 1.6; max-width: 280px; }
.footer-col h4 { font-family: 'Fraunces', serif; font-weight: 500; font-size: 14px; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 20px; color: var(--clay); }
.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 10px; font-size: 14px; color: rgba(245, 239, 226, 0.7); transition: color 0.2s; }
.footer-col li a:hover { color: var(--cream); }
.footer-bottom { padding-top: 32px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px; font-size: 12px; color: rgba(245, 239, 226, 0.5); letter-spacing: 0.05em; }
.footer-social { display: flex; gap: 16px; }
.footer-social a { width: 36px; height: 36px; border: 1px solid rgba(245, 239, 226, 0.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; transition: all 0.25s; color: var(--cream); }
.footer-social a:hover { border-color: var(--clay); background: var(--clay); }

.intro-block { padding: 120px 0; position: relative; z-index: 2; }
.intro-grid { display: grid; grid-template-columns: 1.1fr 1fr; gap: 100px; align-items: center; }
.intro-text .pull { font-family: 'Fraunces', serif; font-style: italic; font-weight: 300; font-size: 36px; line-height: 1.2; color: var(--clay); margin-bottom: 32px; letter-spacing: -0.01em; }
.intro-text p { font-size: 16px; line-height: 1.75; color: var(--ink-soft); margin-bottom: 18px; }
.intro-visual { position: relative; aspect-ratio: 4/5; border-radius: 4px; overflow: hidden; background: linear-gradient(150deg, var(--court) 0%, var(--court-deep) 65%); }
.intro-visual::before { content: ""; position: absolute; inset: 0; background: radial-gradient(ellipse at 80% 25%, rgba(189, 111, 78, 0.32) 0%, transparent 55%), radial-gradient(circle at 20% 80%, rgba(245, 239, 226, 0.12) 0%, transparent 50%); }
.intro-visual::after { content: "PARTNERS"; position: absolute; bottom: 40px; left: 36px; font-family: 'Fraunces', serif; font-style: italic; font-size: 68px; font-weight: 300; color: var(--cream); line-height: 1; letter-spacing: -0.01em; }
.intro-visual-coords { position: absolute; top: 36px; left: 36px; color: var(--cream); font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; opacity: 0.8; line-height: 1.6; }
.intro-visual-tag { position: absolute; top: 36px; right: 36px; font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--clay); background: rgba(245, 239, 226, 0.06); padding: 8px 14px; border: 1px solid rgba(245, 239, 226, 0.18); border-radius: 999px; font-weight: 600; }

.partnerships-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 56px; }
.partnership-card { background: var(--cream); border: 1px solid var(--line); border-radius: 4px; padding: 0; display: flex; flex-direction: column; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s; }
.partnership-card:hover { transform: translateY(-4px); box-shadow: 0 24px 50px -28px rgba(26, 44, 36, 0.25); border-color: var(--mist); }
.partnership-card-accent { height: 6px; width: 100%; }
.partnership-card.academy .partnership-card-accent { background: var(--court); }
.partnership-card.exchange .partnership-card-accent { background: var(--clay); }
.partnership-card.trips .partnership-card-accent { background: var(--sand); }
.partnership-card-body { padding: 36px 32px 32px; flex: 1; display: flex; flex-direction: column; }
.partnership-card-head { display: flex; justify-content: space-between; align-items: center; margin-bottom: 22px; }
.partnership-num { font-family: 'Fraunces', serif; font-style: italic; font-size: 14px; color: var(--clay); letter-spacing: 0.06em; text-transform: uppercase; }
.partnership-tag { font-size: 10px; letter-spacing: 0.22em; text-transform: uppercase; color: var(--ink-soft); font-weight: 600; background: var(--cream-soft); padding: 5px 11px; border-radius: 999px; border: 1px solid var(--line); }
.partnership-card h3 { font-family: 'Fraunces', serif; font-weight: 400; font-size: 28px; line-height: 1.1; letter-spacing: -0.01em; color: var(--court-deep); margin-bottom: 16px; }
.partnership-card h3 em { font-style: italic; color: var(--clay); }
.partnership-card .partnership-desc { font-size: 14.5px; line-height: 1.7; color: var(--ink-soft); margin-bottom: 28px; }
.partnership-meta { margin-top: auto; padding: 20px 0 24px; border-top: 1px solid var(--line); display: flex; flex-direction: column; gap: 12px; }
.meta-row { display: flex; justify-content: space-between; align-items: baseline; gap: 16px; font-size: 13px; }
.meta-label { color: var(--ink-soft); letter-spacing: 0.04em; text-transform: uppercase; font-size: 10px; font-weight: 600; flex-shrink: 0; }
.meta-value { color: var(--court-deep); text-align: right; font-weight: 500; }
.partnership-link { font-family: 'Manrope', sans-serif; font-weight: 600; font-size: 12px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--court-deep); display: inline-flex; align-items: center; gap: 8px; padding-top: 8px; transition: color 0.2s; }
.partnership-link .arrow { transition: transform 0.2s; }
.partnership-link:hover { color: var(--clay); }
.partnership-link:hover .arrow { transform: translateX(3px); }

.model-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-top: 64px; position: relative; }
.model-card { padding: 40px 32px; background: var(--cream); border: 1px solid var(--line); border-radius: 4px; position: relative; transition: transform 0.3s, box-shadow 0.3s; }
.model-card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px -20px rgba(26, 44, 36, 0.2); }
.model-step { font-family: 'Fraunces', serif; font-style: italic; font-size: 14px; color: var(--clay); letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 20px; display: flex; align-items: center; gap: 14px; }
.model-step-num { font-family: 'Fraunces', serif; font-style: italic; font-size: 40px; color: var(--clay); font-weight: 300; line-height: 1; opacity: 0.8; }
.model-card h3 { font-family: 'Fraunces', serif; font-weight: 400; font-size: 24px; color: var(--court-deep); margin-bottom: 14px; letter-spacing: -0.01em; line-height: 1.2; }
.model-card h3 em { font-style: italic; color: var(--clay); }
.model-card p { font-size: 14.5px; color: var(--ink-soft); line-height: 1.7; }
.model-card-meta { margin-top: 24px; padding-top: 18px; border-top: 1px solid var(--line); font-size: 12px; color: var(--ink-soft); letter-spacing: 0.04em; text-transform: uppercase; font-weight: 600; }
.model-card-meta strong { color: var(--court-deep); font-weight: 600; }

.enquiry-block { padding: 120px 0; }
.enquiry-inner { display: grid; grid-template-columns: 1fr 1.2fr; gap: 80px; align-items: start; }
.enquiry-text h2 { font-family: 'Fraunces', serif; font-weight: 400; font-size: clamp(40px, 5vw, 60px); line-height: 1.05; letter-spacing: -0.02em; color: var(--cream); margin-bottom: 28px; }
.enquiry-text h2 em { font-style: italic; color: var(--clay); }
.enquiry-text p { font-size: 17px; line-height: 1.65; color: rgba(245, 239, 226, 0.78); margin-bottom: 28px; max-width: 480px; }
.enquiry-text .small-note { font-size: 13px; color: rgba(245, 239, 226, 0.55); letter-spacing: 0.02em; line-height: 1.6; max-width: 460px; }
.enquiry-text .response-time { margin-top: 36px; padding-top: 28px; border-top: 1px solid rgba(245, 239, 226, 0.15); display: flex; align-items: center; gap: 14px; font-size: 13px; color: rgba(245, 239, 226, 0.7); letter-spacing: 0.04em; }
.enquiry-text .response-time-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--clay); flex-shrink: 0; }
.enquiry-form { background: rgba(245, 239, 226, 0.04); border: 1px solid rgba(245, 239, 226, 0.14); border-radius: 6px; padding: 40px; }
.enquiry-form-label { font-size: 11px; letter-spacing: 0.24em; text-transform: uppercase; color: var(--clay); font-weight: 600; margin-bottom: 12px; }
.enquiry-form h3 { font-family: 'Fraunces', serif; font-weight: 400; font-size: 26px; line-height: 1.2; color: var(--cream); margin-bottom: 28px; letter-spacing: -0.01em; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.enquiry-form input[type="text"], .enquiry-form input[type="email"], .enquiry-form input[type="tel"], .enquiry-form textarea { width: 100%; padding: 14px 18px; border: 1px solid rgba(245, 239, 226, 0.2); border-radius: 4px; background: rgba(245, 239, 226, 0.04); font: inherit; font-size: 14px; color: var(--cream); margin-bottom: 12px; outline: none; transition: border 0.2s, background 0.2s; resize: none; }
.enquiry-form textarea { min-height: 110px; font-family: inherit; line-height: 1.6; }
.enquiry-form input::placeholder, .enquiry-form textarea::placeholder { color: rgba(245, 239, 226, 0.4); }
.enquiry-form input:focus, .enquiry-form textarea:focus { border-color: var(--clay); background: rgba(245, 239, 226, 0.07); }
.checkbox-group { margin: 16px 0 20px; }
.checkbox-group-label { font-size: 11px; letter-spacing: 0.16em; text-transform: uppercase; color: rgba(245, 239, 226, 0.6); font-weight: 600; margin-bottom: 14px; }
.checkbox-row { display: flex; flex-direction: column; gap: 10px; }
.checkbox-row label { display: flex; align-items: center; gap: 12px; font-size: 14px; color: rgba(245, 239, 226, 0.85); cursor: pointer; padding: 10px 14px; border: 1px solid rgba(245, 239, 226, 0.12); border-radius: 4px; transition: border 0.2s, background 0.2s; }
.checkbox-row label:hover { border-color: rgba(245, 239, 226, 0.28); background: rgba(245, 239, 226, 0.04); }
.checkbox-row input[type="checkbox"] { appearance: none; -webkit-appearance: none; width: 16px; height: 16px; border: 1px solid rgba(245, 239, 226, 0.4); border-radius: 3px; background: transparent; cursor: pointer; position: relative; transition: all 0.2s; flex-shrink: 0; }
.checkbox-row input[type="checkbox"]:checked { background: var(--clay); border-color: var(--clay); }
.checkbox-row input[type="checkbox"]:checked::after { content: ""; position: absolute; left: 4px; top: 1px; width: 5px; height: 9px; border: solid var(--cream); border-width: 0 1.5px 1.5px 0; transform: rotate(45deg); }
.enquiry-form button { width: 100%; margin-top: 8px; }
.enquiry-form-note { font-size: 11px; color: rgba(245, 239, 226, 0.45); margin-top: 16px; text-align: center; line-height: 1.5; }

.final-cta { text-align: center; padding: 140px 0 120px; position: relative; z-index: 2; }
.final-cta-eyebrow { font-size: 11px; letter-spacing: 0.28em; text-transform: uppercase; color: var(--clay); font-weight: 600; margin-bottom: 24px; }
.final-cta h2 { font-family: 'Fraunces', serif; font-weight: 400; font-size: clamp(44px, 5.5vw, 72px); line-height: 1.05; letter-spacing: -0.025em; color: var(--court-deep); margin: 0 auto 24px; max-width: 880px; }
.final-cta h2 em { font-style: italic; color: var(--clay); }
.final-cta p { font-size: 18px; color: var(--ink-soft); max-width: 600px; margin: 0 auto 36px; }
.final-cta .direct-email { display: inline-flex; align-items: center; gap: 12px; padding: 16px 28px; border: 1px solid var(--court); border-radius: 999px; font-family: 'Manrope', sans-serif; font-weight: 600; font-size: 14px; color: var(--court-deep); letter-spacing: 0.04em; transition: all 0.25s ease; }
.final-cta .direct-email:hover { background: var(--court); color: var(--cream); transform: translateY(-1px); }
.final-cta .direct-email-tag { font-family: 'Fraunces', serif; font-style: italic; font-size: 13px; font-weight: 400; color: var(--clay); }

@media (max-width: 1100px) { .nav { gap: 22px; font-size: 13px; } }
@media (max-width: 980px) {
  .container, .container-narrow { padding: 0 24px; }
  .nav { display: none; }
  section.block { padding: 80px 0; }
  .page-header { padding: 56px 0 64px; }
  .top-right .lang { display: none; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .intro-block { padding: 80px 0; }
  .intro-grid { grid-template-columns: 1fr; gap: 56px; }
  .partnerships-grid { grid-template-columns: 1fr; gap: 20px; }
  .model-grid { grid-template-columns: 1fr; gap: 20px; }
  .enquiry-block { padding: 80px 0; }
  .enquiry-inner { grid-template-columns: 1fr; gap: 48px; }
  .enquiry-form { padding: 32px 24px; }
  .form-row { grid-template-columns: 1fr; gap: 0; }
  .final-cta { padding: 80px 0; }
}
@media (max-width: 600px) { .footer-grid { grid-template-columns: 1fr; } }
</style>



<header class="topbar">
  <div class="container topbar-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <span class="logo-mark">P</span>
      <div><div>Palm Coast Padel</div><small>Marbella, Costa del Sol</small></div>
    </a>
    <nav class="nav">
      <a href="<?php echo esc_url(home_url('/course/')); ?>">Course</a>
      <a href="<?php echo esc_url(home_url('/coach/')); ?>">The Coach</a>
      <a href="<?php echo esc_url(home_url('/stories/')); ?>">Stories</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
      <a href="<?php echo esc_url(home_url('/experiences/')); ?>">Experiences</a>
      <a href="<?php echo esc_url(home_url('/for-clubs/')); ?>" class="active">For Clubs</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
    <div class="top-right">
      <div class="lang" role="group" aria-label="Language"><button class="current">EN</button><button>ES</button><button>FR</button></div>
      <a href="#enquiry" class="btn btn-primary">Talk to us <span class="arrow">→</span></a>
    </div>
  </div>
</header>

<section class="page-header">
  <div class="container">
    <div class="page-header-eyebrow"><span></span> Partnerships, for clubs</div>
    <h1 class="page-title">Partnership with the European <em>home</em> of the game.</h1>
    <p class="page-sub">Three structured ways for padel clubs to work with Palm Coast Padel. Each format addresses a different problem clubs commonly face. Member retention, coaching depth, or access to Marbella experiences. The terms are clear. The trial periods are short. The agreements are written to work for both sides from the first month.</p>
  </div>
</section>

<div class="authority">
  <div class="authority-track">
    <span>Coaches who have competed at <em>European level</em></span><span class="authority-dot"></span>
    <span>Curriculum filmed in <em>Marbella</em>, in 4K</span><span class="authority-dot"></span>
    <span>Trial periods, not <em>opening contracts</em></span><span class="authority-dot"></span>
    <span>Anchored at <em>Palm Coast Club</em>, Marbella</span><span class="authority-dot"></span>
    <span>Coaching record across <em>three continents</em></span><span class="authority-dot"></span>
    <span>Coaches who have competed at <em>European level</em></span><span class="authority-dot"></span>
    <span>Curriculum filmed in <em>Marbella</em>, in 4K</span><span class="authority-dot"></span>
    <span>Trial periods, not <em>opening contracts</em></span><span class="authority-dot"></span>
    <span>Anchored at <em>Palm Coast Club</em>, Marbella</span><span class="authority-dot"></span>
    <span>Coaching record across <em>three continents</em></span><span class="authority-dot"></span>
  </div>
</div>

<section class="intro-block">
  <div class="container intro-grid">
    <div class="intro-text">
      <p class="pull">"A partnership is the structure that lets one club do something it could not do alone."</p>
      <p>Palm Coast Padel runs three operations from Marbella. A coaching school, an online academy filmed in 4K, and a trip business that brings visiting players onto the courts of the Costa del Sol. All three are built around the same curriculum, taught by the same team, and benchmarked at European competition level.</p>
      <p>For a partner club, this means three things. A curriculum that has been refined on the courts where the modern game was built. A coach with playing and coaching credentials at international level. And a Marbella operation that can host your members, or be brought to them.</p>
      <p>Most partnerships start small. A single coaching visit, a trial period of academy access, a first group of members travelling to Marbella. They expand when the value is proven, not before. We do not believe in long opening contracts. We believe in arrangements that work for both sides from the first month.</p>
    </div>
    <div class="intro-visual" aria-hidden="true">
      <div class="intro-visual-coords">36.510° N, 4.886° W<br>Costa del Sol, España</div>
      <div class="intro-visual-tag">For clubs</div>
    </div>
  </div>
</section>

<section class="block" style="background: var(--cream-soft);">
  <div class="container">
    <span class="section-num">01, the three partnerships</span>
    <h2 class="section-title">Three structured ways to <em>work together</em>.</h2>
    <p class="section-lead">Each format is built around a specific problem clubs commonly face. Pick the one that fits your situation. Combine them if more than one applies. The terms below are starting points, not fixed packages.</p>

    <div class="partnerships-grid">

      <article class="partnership-card academy">
        <div class="partnership-card-accent"></div>
        <div class="partnership-card-body">
          <div class="partnership-card-head">
            <div class="partnership-num">Format i.</div>
            <div class="partnership-tag">Digital</div>
          </div>
          <h3>Academy access for <em>members</em></h3>
          <p class="partnership-desc">License the Palm Coast Padel Academy for your club. Members get the Initiation course at a partner rate, or as a membership benefit. Their progress and engagement are visible to your coaching team. Future courses are included as they launch.</p>
          <div class="partnership-meta">
            <div class="meta-row"><span class="meta-label">For</span><span class="meta-value">Clubs with a member learning pathway</span></div>
            <div class="meta-row"><span class="meta-label">Model</span><span class="meta-value">Per member, per year, or bulk license</span></div>
            <div class="meta-row"><span class="meta-label">Trial</span><span class="meta-value">Three months</span></div>
          </div>
          <a href="#enquiry" class="partnership-link">Enquire about this format <span class="arrow">→</span></a>
        </div>
      </article>

      <article class="partnership-card exchange">
        <div class="partnership-card-accent"></div>
        <div class="partnership-card-body">
          <div class="partnership-card-head">
            <div class="partnership-num">Format ii.</div>
            <div class="partnership-tag">In person</div>
          </div>
          <h3>Coaching <em>exchange</em></h3>
          <p class="partnership-desc">Yannik and the Palm Coast team visit your club for clinics, masterclasses, or week-long coaching residencies. Your coaches train in Marbella with the same curriculum the academy is filmed from. Two-way movement, taught from the same playbook.</p>
          <div class="partnership-meta">
            <div class="meta-row"><span class="meta-label">For</span><span class="meta-value">Clubs with active coaching programmes</span></div>
            <div class="meta-row"><span class="meta-label">Model</span><span class="meta-value">Per visit, residency, or annual programme</span></div>
            <div class="meta-row"><span class="meta-label">Trial</span><span class="meta-value">By engagement</span></div>
          </div>
          <a href="#enquiry" class="partnership-link">Enquire about this format <span class="arrow">→</span></a>
        </div>
      </article>

      <article class="partnership-card trips">
        <div class="partnership-card-accent"></div>
        <div class="partnership-card-body">
          <div class="partnership-card-head">
            <div class="partnership-num">Format iii.</div>
            <div class="partnership-tag">Outbound</div>
          </div>
          <h3>Marbella trips for <em>your members</em></h3>
          <p class="partnership-desc">Your members travel to Marbella on Palm Coast Padel trips with priority access and partner rates. You offer a premium experience to your members without taking on the operational burden of running it. The club retains the relationship, we deliver the trip.</p>
          <div class="partnership-meta">
            <div class="meta-row"><span class="meta-label">For</span><span class="meta-value">Clubs with members who travel for padel</span></div>
            <div class="meta-row"><span class="meta-label">Model</span><span class="meta-value">Referral structure or annual quota</span></div>
            <div class="meta-row"><span class="meta-label">Trial</span><span class="meta-value">Per trip</span></div>
          </div>
          <a href="#enquiry" class="partnership-link">Enquire about this format <span class="arrow">→</span></a>
        </div>
      </article>

    </div>
  </div>
</section>

<section class="block">
  <div class="container">
    <span class="section-num">02, the model</span>
    <h2 class="section-title">How the relationship <em>works</em>.</h2>
    <p class="section-lead">Partnerships are structured to fit the club, not the other way around. Every arrangement begins with a conversation, runs through a defined trial, and only becomes long term when both sides have evidence to support it.</p>

    <div class="model-grid">
      <div class="model-card">
        <div class="model-step"><span class="model-step-num">i.</span>The conversation</div>
        <h3>Thirty minutes, <em>no deck</em>.</h3>
        <p>A first call with Yannik or the club operations lead. No slide pitch. We listen to the problem and ask the structural questions. If the fit is not obvious by the end, we say so and there is no follow up.</p>
        <div class="model-card-meta"><strong>Time</strong> · 30 minutes</div>
      </div>
      <div class="model-card">
        <div class="model-step"><span class="model-step-num">ii.</span>The proposal</div>
        <h3>A structure, <em>not a pitch</em>.</h3>
        <p>If there is a fit, we propose a working structure. Always with a defined trial period. Always with explicit success criteria agreed up front. The proposal is short. The first version arrives within five working days.</p>
        <div class="model-card-meta"><strong>Time</strong> · Five working days</div>
      </div>
      <div class="model-card">
        <div class="model-step"><span class="model-step-num">iii.</span>The trial</div>
        <h3>Three to six months <em>of evidence</em>.</h3>
        <p>The trial runs against the criteria we agreed. At the end, both sides review the data. Continuation is by mutual consent. Long term agreements only happen when the first cycle has earned them.</p>
        <div class="model-card-meta"><strong>Time</strong> · 3 to 6 months</div>
      </div>
    </div>
  </div>
</section>

<section class="block dark-section enquiry-block" id="enquiry">
  <div class="container enquiry-inner">
    <div class="enquiry-text">
      <span class="section-num">03, the conversation</span>
      <h2>Tell us about <em>your club</em>.</h2>
      <p>The first call is exploratory. Thirty minutes, no slide deck, no sales pitch. We want to understand what the club is trying to solve before we suggest anything.</p>
      <p>If a particular format is already on your mind, say so below. If you are not sure yet, leave it blank. We will help you work it out.</p>
      <p class="small-note">Enquiries reach Yannik and the club operations lead directly. They are not routed through a general inbox.</p>
      <div class="response-time"><span class="response-time-dot"></span>We respond within two working days.</div>
    </div>
    <form class="enquiry-form" onsubmit="event.preventDefault();">
      <div class="enquiry-form-label">Partnership enquiry</div>
      <h3>Send us a note about the club.</h3>
      <div class="form-row">
        <input type="text" placeholder="Your name" aria-label="Your name" required>
        <input type="text" placeholder="Your role" aria-label="Your role" required>
      </div>
      <input type="text" placeholder="Club name" aria-label="Club name" required>
      <div class="form-row">
        <input type="text" placeholder="Club city" aria-label="Club city" required>
        <input type="text" placeholder="Country" aria-label="Country" required>
      </div>
      <input type="email" placeholder="Email" aria-label="Email" required>
      <input type="tel" placeholder="Phone (optional)" aria-label="Phone">
      <div class="checkbox-group">
        <div class="checkbox-group-label">What are you interested in?</div>
        <div class="checkbox-row">
          <label><input type="checkbox" name="interest" value="academy"> Academy access for members</label>
          <label><input type="checkbox" name="interest" value="exchange"> Coaching exchange</label>
          <label><input type="checkbox" name="interest" value="trips"> Marbella trips for members</label>
          <label><input type="checkbox" name="interest" value="other"> Something else, or not sure yet</label>
        </div>
      </div>
      <textarea placeholder="Anything you would like us to know in advance? Member count, current coaching setup, what you are trying to solve." aria-label="Additional context"></textarea>
      <button type="submit" class="btn btn-primary btn-large">Send enquiry <span class="arrow">→</span></button>
      <div class="enquiry-form-note">Response within two working days. No general mailing list.</div>
    </form>
  </div>
</section>

<section class="final-cta">
  <div class="container">
    <div class="final-cta-eyebrow">Direct line</div>
    <h2>Talk to the <em>head coach</em> directly.</h2>
    <p>If the conversation calls for it, Yannik is contactable for partnership enquiries at the email below. Owners, GMs, and head coaches only.</p>
    <a href="mailto:partnerships@palmcoastpadel.com" class="direct-email">
      <span class="direct-email-tag">Yannik Molina</span>
      partnerships@palmcoastpadel.com
      <span class="arrow">→</span>
    </a>
  </div>
</section>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><span class="logo-mark">P</span><div><div>Palm Coast Padel</div><small style="color: rgba(245, 239, 226, 0.6);">Marbella, Costa del Sol</small></div></a>
        <p>The Marbella padel operation. Teaching the game from where it grew up, online and in person.</p>
      </div>
      <div class="footer-col"><h4>Academy</h4><ul>
        <li><a href="<?php echo esc_url(home_url('/course/')); ?>">Initiation course</a></li>
        <li><a href="<?php echo esc_url(home_url('/coach/')); ?>">The coach</a></li>
        <li><a href="<?php echo esc_url(home_url('/stories/')); ?>">Student stories</a></li>
        <li><a href="<?php echo esc_url(home_url('/school/')); ?>">Free first lesson</a></li>
      </ul></div>
      <div class="footer-col"><h4>Operation</h4><ul>
        <li><a href="<?php echo esc_url(home_url('/experiences/')); ?>">Experiences</a></li>
        <li><a href="<?php echo esc_url(home_url('/for-clubs/')); ?>">For clubs</a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
      </ul></div>
      <div class="footer-col"><h4>Contact</h4><ul>
        <li>+34 673 24 05 32</li>
        <li>info@palmcoastpadel.com</li>
        <li>partnerships@palmcoastpadel.com</li>
        <li>Marbella, Spain</li>
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
