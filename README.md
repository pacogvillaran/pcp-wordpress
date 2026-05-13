# PCP WordPress Package for Hostinger

This repository contains a WordPress-ready theme and plugin generated from the provided Palm Coast Padel static design.

## Structure

- `wp-content/themes/pcp-academy`: custom PCP theme
- `wp-content/plugins/pcp-learnworlds-bridge`: LearnWorlds URL settings plugin

## What is included

- Page templates matching design pages:
  - Home (`front-page.php`)
  - Course, Coach, Stories, About, Contact, Experiences, For Clubs
- `LearnWorlds Wrapper` page template (`template-learnworlds-wrapper.php`)
- Plugin setting at `Settings > PCP LearnWorlds` for school URL

## Hostinger deployment (recommended)

1. In Hostinger hPanel, create or open your WordPress install for `palmcoastpadelacademy.com`.
2. Upload theme folder `pcp-academy` into `wp-content/themes/`.
3. Upload plugin folder `pcp-learnworlds-bridge` into `wp-content/plugins/`.
4. In WordPress admin:
   - Activate theme `PCP Academy Theme`.
   - Activate plugin `PCP LearnWorlds Bridge`.
   - Set permalink structure to `Post name`.
5. Create pages with these slugs and assign matching templates:
   - `/course/` -> `Course`
   - `/coach/` -> `Coach`
   - `/stories/` -> `Stories`
   - `/about/` -> `About`
   - `/contact/` -> `Contact`
   - `/experiences/` -> `Experiences`
   - `/for-clubs/` -> `For Clubs`
6. Set static homepage:
   - Settings > Reading > Homepage -> a page using `Homepage` template (or keep `front-page.php` behavior by creating a page and setting as homepage).
7. LearnWorlds wrapper:
   - Settings > PCP LearnWorlds -> set school URL (example: `https://your-school.learnworlds.com`).
   - Create a page (e.g. `/school/`) and assign template `LearnWorlds Wrapper`.

## Notes for LearnWorlds integration

- If your LearnWorlds plan/domain blocks iframe embedding, use direct-link CTA buttons instead of wrapper iframe.
- Check these in LearnWorlds domain/security settings:
  - Allow embedding on `palmcoastpadelacademy.com`
  - HTTPS enabled on both domains
- If SSO is needed, configure it in LearnWorlds + WordPress with the chosen SSO provider/plugin.

## Optional Git sync with Hostinger

If you use Hostinger Git deployment, initialize this folder as a Git repo and connect to Hostinger deployment target.

