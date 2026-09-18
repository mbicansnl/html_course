# Hytech-Pommec Website — Content & Decisions Brief

This file is the shared source of truth for rebuilding the Hytech-Pommec
marketing site. It exists so Claude Code has the same context across every
phase/prompt without needing everything re-pasted each time. Reference the
relevant section by heading in each new prompt (e.g. "see § Markets content
below for the Diving page").

Source: real copy pulled via view-source from the current live site
(hytech-pommec.com) plus a test/acceptance environment, September 2026.
Company info confirmed directly by Largo (freelance/intern working with
Hytech-Pommec) unless marked otherwise.

---

## 1. Brand

- **Colors:** primary/dark purple `#29235C`, accent orange `#F39200`, white.
  A blue accent appears on the current live site (buttons, icons) but it
  traces back to an unstyled Gravity Forms plugin default, not an
  intentional brand color — do not carry it forward.
- **Fonts:** Archivo (headings, weights 600/700/800) + Lato (body). Both
  via Google Fonts. Confirmed from the live theme's actual stylesheet
  links, not guessed.
- **Logo:** wordmark only, no icon/mark — "HYTECH" + orange dash + "POMMEC",
  uppercase, Archivo ExtraBold, tight letter-spacing. Real logo files to be
  dropped in later; build as styled text until then.
- **Company:** Hytech-Pommec B.V., Ramgatseweg 27, 4941 VN Raamsdonksveer,
  The Netherlands. Phone +31 (0)85 792 43 00. Formed from the 2021 merger
  of Hytech B.V. (est. 1989) and Technical Diving Equipment Pommec B.V.
  (est. 1978 by Rudi Pommé). Official Kirby Morgan (KMDSI) dealer.

---

## 2. Navigation (final structure — decided)

```
Markets ▾
  Diving
  Medical
  Governmental
  Life support
  Yachting
  Tunnelling

Products ▾  (grouped by family, not a flat SKU list)
  Chambers
    – Deck Decompression Chamber
    – HYOT Triple Lock Hyperbaric Oxygen Treatment Chamber
    – Hyperbaric Oxygen Therapy Chambers (HBO-T)
  Launch & Recovery Systems
    – Heavy Duty Launch and Recovery System
    – Launch and Recovery System Lite
  Life support systems
  Kirby Morgan / personal equipment

Service ▾
  Training
  (Re)Certification
  Maintenance
  Renovations

Updates          (single link)

About ▾
  About us        (merged: old About + Mission/Vision)
  Quality
  History

Careers           (single link — Dutch content, see §7)

Contact           (single link)
```

Persistent orange "Contact" CTA button in header, in addition to the nav
item (matches current site pattern).

Footer: Headoffice address block, Contact block (phone/email), social
icon placeholders (LinkedIn/YouTube/Facebook — href="#" until real links
supplied), legal links (General conditions of sale, Privacy, Careers),
copyright line, large repeated wordmark bottom-right.

**Cut from nav entirely:** "Distribution network" (was a single paragraph
+ map, no real content) — fold its one paragraph into About or Contact,
not a standalone page.

---

## 3. Decisions log

| Topic | Decision |
|---|---|
| Tech stack | Plain PHP/HTML/CSS, no framework, via Claude Code, in a GitHub repo (Largo's own sandboxed testing environment — not touching the live site) |
| Build approach | Multiple phased prompts, not one mega-prompt: Foundation → Home → Markets → Products → Service → About/Quality/History → Careers/Contact/Updates → Polish |
| Products nav | Group by family (Chambers / LARS / Life support / Kirby Morgan), not a flat list |
| About + Mission/Vision | Merge into one "About us" page |
| Distribution network | Cut as a nav page; fold its one paragraph into About or Contact |
| Careers language | Stays in Dutch (local hires expect Dutch); add a language toggle on that page. Rest of site stays English. Toggle is a one-off on this page for now, not full site-wide i18n infrastructure — generalize later if needed |
| History page CEO quote | Remove entirely (attributed to a since-departed CEO — Hytech-Pommec has since named a new CEO per public reporting) |
| Vague/unattributed testimonials (Diving, Medical, Governmental, Life support, Yachting, Quality pages) | Don't present as testimonials at all. Fold the sentiment of each quote into the surrounding body copy as plain descriptive statements (e.g. "built to meet the strictest safety standards while staying practical to operate offshore" as fact, not attributed quote). **Pending:** Largo is checking wp-admin (custom fields / testimonial post type) and with Carin whether any of these were ever real, attributable quotes — if so, keep those as real testimonials instead of dissolving them. Not yet resolved as of this writing. |
| Products landing page | Currently has no real body copy on the live site — needs real intro copy written (not just a placeholder) once we get to that phase |

---

## 4. Page-by-page content reference

### 4.1 Home

**Hero:**
- Eyebrow-style framing not present on live site; headline: "Hyperbaric &
  diving solutions for challenging environments" ("Hyperbaric" and
  "solutions" as accent-colored words)
- Subhead: "We design, build and maintain advanced life support systems
  and hyperbaric solutions for commercial diving, medical, defense,
  yachting and industrial sectors—ensuring safety and performance under
  extreme conditions."
- CTAs: "Products", "Contact"

**Solutions by market** (carousel of 6): Diving, Governmental, Life
support, Medical, Tunnelling, Yachting — each a photo card + label +
arrow, linking to its market page. "All markets" link.

**Intro/credibility block:**
"We are a leading European manufacturer and global supplier of total
hyperbaric solutions." ("leading European manufacturer" accent-colored)

Three trust points:
- Tailored Solutions — "Custom-built systems for diverse industry needs."
- Highest Safety Standards — "Certified products meeting rigorous
  industry norms."
- Global Reach — "Serving clients worldwide"

**Our product range** (carousel): Deck Decompression Chamber, DART ATEL,
HYOT Triple Lock, Launch And Recovery System Lite, Life support systems.
"All products" link.

**Updates carousel:** 3 latest posts + "All updates" link (see §4.9 for
current post list — pull live/latest at build time, don't hardcode).

**"We proudly represent"** — partner/distributor logo strip (real logos
not yet supplied — placeholder until provided).

**Footer** — see §2.

---

### 4.2 Markets — shared template

Every market page on the live site follows the same structure. Use one
shared PHP template (`/markets/_template.php` or similar, via `include`)
driven by per-market content, rather than duplicating markup six times:

1. Hero: market name + 1-2 paragraph intro
2. "Product options for [market]" — bullet list
3. "Application areas" — bullet list
4. Environmental/standards specs — bullet list
5. Standards & certifications — bullet list
6. (Was: testimonial blockquote — now dissolved into prose per §3)
7. "High standards" / "Safety" narrative section (2 short paragraphs)
8. CTA line ("Let's build it—together" style) + contact form block
9. Footer

**Diving:**
Intro: "Hytech-Pommec is a trusted supplier of advanced diving systems for
professional diving companies worldwide. With decades of experience in
the field, we understand the operational challenges faced by commercial
divers working in offshore, nearshore, and inland environments. Whether
it's for underwater construction, inspection, maintenance, or salvage
work, our systems are built to support safe, efficient, and reliable
operations under the most demanding conditions."

"From air dive spreads to complex hyperbaric life support systems, we
offer certified, tailor-made solutions aligned with international diving
standards. As a proud official dealer of Kirby Morgan and a reliable
engineering partner to IMCA- and IDSA-aligned operators, we help push the
boundaries of operational capability while safeguarding diver health and
safety."

Product range: Classed air dive spreads; Deck Decompression Chambers
(DDCs); Launch and Recovery Systems (LARS); Wet bells; Kirby Morgan®
helmets, masks & accessories; Diving Control Containers (DCC);
Self-Propelled Hyperbaric Lifeboats (SPHLs); Containerized life support
systems; Commercial diving panels and consoles; Personal diving tools and
communication systems.

Application areas: Underwater welding and cutting; Offshore platform
inspection and maintenance; Subsea cable and pipeline installation;
Salvage and recovery operations; Training and simulation of dive
scenarios; Diver rescue and emergency evacuation; Saturation diving
support; Inland and civil engineering dive works.

Designed for harsh environments: certified to required depths (incl.
saturation diving) on request; built for marine/offshore; suitable for
tropical, arctic or desert climates; ATEX options available; NORSOK and
IMCA D-series compliant; modular for transport.

Integrated options: Communication incl. Helium Speech Unscramblers;
camera/video systems; diver depth monitoring; breathing gas systems (EAN
etc.); gas analysis systems.

(Testimonial to dissolve: "reliable partner, delivering diving systems
that meet the strictest safety standards while staying practical and easy
to operate offshore")

Quality & safety: "All our diving systems are engineered with safety at
the core. We understand that diver well being is non-negotiable. That's
why our designs include critical redundancies, intuitive control panels,
and seamless integration with life support systems. We work closely with
our clients to ensure that their operational, regulatory and safety
requirements are fully met or exceeded."

Tailor-made: "No operation is the same – and neither are our solutions.
Our in-house engineering team develops fully customized dive systems to
meet your mission profile, vessel layout, or specific offshore
requirements. Whether it's a compact air dive spread for a workboat or a
turnkey DDC-LARS-SPHL package for a dive support vessel, we design for
performance, reliability and compliance."

CTA line: "Let's build your next diving system—together."

**Medical:**
Intro: "Hyperbaric Oxygen Treatment (HBO-T) is a powerful medical
treatment that uses oxygen at elevated atmospheric pressures to support
and accelerate the body's natural healing processes. It is increasingly
recognised for its ability to improve oxygen availability in damaged
tissues, boost immune response, and enhance recovery from a wide range of
conditions—including those involving chronic wounds, radiation injuries,
and severe infections."

"HBO-T is used in various medical settings and may be part of treatment
protocols for certain conditions, depending on local regulatory
approvals. Indications for use can vary between countries and regions
based on clinical guidelines and regulatory classifications."

"For detailed information about approved uses, safety considerations, and
product availability in your region, please contact us directly or
consult with a qualified healthcare professional. Backed by over 40 years
of expertise in hyperbaric technology and diving systems, Hytech-Pommec
is a trusted partner for hospitals and clinics worldwide. We design and
manufacture state-of-the-art hyperbaric oxygen therapy systems that meet
the most demanding clinical, technical, and safety standards."

Key advantages: Long pressure vessel fatigue life; Reliability even with
intensive daily use; Certified chambers, standard or custom-built; Dual
regulators for low breathing resistance; 24/7 global service and
predictive multi-year maintenance; Low operational costs, high energy
efficiency; Pre-programmed therapy profiles; Integrated
entertainment/comms with individual patient controls; Turnkey delivery
incl. installation and staff training.

Quality & safety options: MDD 93/42/EEC; ISO 13485:2016; 2007/47/EC and
EN 14931 (PHVO); PED 2014/68/EU; hyperbaric firefighting standard EN16081.

(Disclaimer footnotes present on live page re: regional regulatory
variation — keep the substance, tidy the footnote formatting.)

(Testimonial to dissolve: "we know our patients are in the safest hands.
Their team understands what a clinic really needs")

"Shaping the future of hyperbaric medicine": "At Hytech-Pommec, we're
committed to driving innovation in hyperbaric care – developing systems
that not only meet today's clinical needs, but are future-proofed for
tomorrow's challenges. Our solutions are already in use by hospitals,
rehabilitation centers, private clinics and military medical units across
the globe."

CTA line: "Looking for a hyperbaric solution that combines proven
performance, technical excellence and full-service support? Let's build
it—together."

Service blurb (medical-specific): "We know that in healthcare, downtime
is not an option. That's why Hytech-Pommec offers worldwide service,
rapid parts supply, and preventive maintenance planning tailored to
medical facilities. Our specialist teams provide on-site installation,
training and ongoing support to keep your hyperbaric systems operating
safely, efficiently, and reliably—so you can deliver uninterrupted care
to your patients."

**Governmental:**
Intro: "Advanced diving and medical solutions designed to meet the
highest standards of military and public safety operations. Whether
serving naval forces, army units or specialized response teams, these
systems deliver operational excellence even in the most demanding
environments."

"In critical defense scenarios, safety, reliability, and rapid deployment
are essential. Mobile hyperbaric solutions and full-scale submarine
rescue systems help ensure mission readiness, protect divers, and
maintain operational effectiveness. Trusted by governmental forces and
specialist teams worldwide to safeguard people and achieve objectives
without compromise."

Product options: Deck Decompression Chambers; Lightweight transportable
hyperbaric & diving systems; Launch and Recovery Systems; Diving
equipment; Diving simulators & underwater training facilities; Bell
handling systems; Submarine rescue systems; Containerized systems.

Application areas: Underwater welding; Diver support; Hyperbaric oxygen
therapy (Medical); Rescue operations; Training/simulation.

Environmental: Operational to significant depths; diver support in
low-visibility/hazardous waters; extreme hot/cold climates; ATEX
configurations available.

Key benefits: Proven performance in defence applications; engineering
flexibility/custom-fit; resilient designs; compliance with international
safety regulations; dedicated service and long-term support.

(Testimonial to dissolve: "Reliability in the field is non-negotiable.
These systems delivered exactly what our teams needed, even under
extreme conditions.")

High standards: "All our systems are engineered and manufactured to
exceed industry and military specifications. Quality assurance,
traceability, and long-term maintainability are embedded in every step of
our development and production process. Our facilities are equipped to
deliver at scale, with security clearance and defense-compliant
manufacturing protocols."

Custom built: "From containerized decompression systems to integrated
diver training simulators, each product can be tailored to specific
operational goals. Our in-house engineering team collaborates with
defense clients to develop turnkey solutions that are field-ready and
future-proof."

Products shown: Deck Decompression Chamber, DART ATEL.

**Life support:**
Intro: "Working in inert or hazardous environments comes with unique
safety challenges. Whether you're cleaning industrial tanks, maintaining
confined spaces, or operating in nitrogen-rich atmospheres, reliable
breathing protection is essential — not just for compliance, but for
peace of mind."

"Hytech-Pommec designs and builds life support systems that help you
protect your people during high-risk operations. These systems are
commonly integrated into trailers, containers, trucks or mobile units,
ready for deployment wherever the job takes you."

"From full-scale life support systems to personal protective gear,
you'll find a complete range of solutions that are trusted across the
industrial cleaning sector."

Product options: Custom-built life support systems (trailers, containers,
trucks); A&B boxes for safe breathing air (2–4 users); Escape bottle
sets; Umbilicals and bail-out bottles; Full-face masks and helmets with
communications; Monitoring/warning systems (gas detection, pressure, O₂);
Mobile air supply units (compressors or bottle racks); Maintenance and
re-certification services.

**Note:** live page currently duplicates this exact list under
"Application areas" too (copy-paste bug) — write genuine, distinct
application-area content for the rebuild (e.g. industrial tank cleaning,
confined-space entry, nitrogen-purged environments, offshore hazardous
atmospheres — infer sensible real-world uses, don't just repeat the
product list).

Standards & certifications: EN 12021, EN14593/14594; ATEX and PED
requirements; SIR protocols; tested/approved for industrial cleaning use;
annual maintenance/re-inspection available; technical documentation and
operational training included.

(Testimonial to dissolve: "robust, easy to deploy, and the service team
is always ready to help us keep everything certified and safe. It gives
us — and our crews — real peace of mind.")

High standards: "Our life support systems are engineered for reliability
and performance under pressure. Every unit is designed with safety,
usability and long-term durability in mind. We collaborate closely to
ensure our systems meet operational demands — no matter how extreme. From
gas-tight construction to redundant fail-safe systems, we never
compromise on protection."

Service & maintenance: "Keeping life support systems in top condition is
critical for safe operations. That's why Hytech-Pommec offers
full-service maintenance and certification programs for all delivered
units. Whether it's an annual inspection, filter replacement, leak
testing or complete refurbishment — our experienced technicians ensure
your systems stay compliant and ready to perform."

**Yachting:**
Intro: "In the high-end yachting industry, quality, safety and discretion
are essential. At Hytech-Pommec, we understand the unique demands of
shipyards that build the world's most advanced and luxurious yachts."

"Whether it's for onboard diving operations, safety systems, or
custom-built hyperbaric facilities, we provide solutions that match the
standards of excellence expected in this yachting market. From
engineering and manufacturing to installation and lifecycle service, we
support your projects with reliable technology, operational flexibility,
and strict compliance with maritime regulations."

Product options: Deck decompression chamber; DART & ATEL (Diver Attendant
Recompression Chamber with Attachable Transport Entrance Lock); EAN
(Enriched Air Nitrox) systems; Compact hyperbaric systems; Custom gas
distribution panels; Oxygen cleaning and certified components;
Containerized dive control stations; High-spec breathing air compressors;
Fender & toys inflating/deflating system.

Application areas: Emergency preparedness with hyperbaric treatment
capacity; operational up to 50 msw; designed for marine/offshore
conditions; corrosion-resistant materials for harsh saltwater.

Standards & certifications: Can be built to DNV, ABS and Lloyd's Register
diving-systems rules; decompression chambers to PED 2014/68/EU or ASME
VIII; IMCA guidelines followed; custom certifications on request.

(Testimonial to dissolve: "innovative solutions that not only enhance
efficiency but also contribute to the sustainability of our
infrastructure... strengthening national security and supporting our
long-term ambitions for a future-proof economy" — note: this quote reads
oddly for "yachting" (mentions "national security") and may have been
copy-pasted from the wrong market originally; don't reuse its specifics,
just the general sentiment about quality/reliability, or drop entirely.)

High quality: "We believe that high quality is not just a feature — it's
a foundation. All our systems are engineered to meet the highest
international standards and guidelines, where functionality must align
with safety. From the choice of corrosion-resistant materials to
precision control interfaces and custom built hyperbaric solutions, our
technology is built to be safe — and built to be operator friendly. Every
system is inspected and tested to ensure functionality, reliability, and
long-term performance, even under the toughest marine conditions."

Safety: "Safety is at the core of everything we deliver. From redundant
system design to intelligent monitoring and control, our solutions are
built to protect crew, divers, and assets. All systems are extensively
tested and documented before delivery."

**Tunnelling:**
Intro: "We support tunnelling operations with advanced, custom-built life
support systems and pressurised personnel locks that ensure safety and
efficiency in underground compressed air environments. Whether it's
access to pressurised work zones, support for hyperbaric interventions,
or standby decompression capabilities – we understand the unique demands
of tunnel construction."

"From small-diameter TBM (tunnel boring machine) access locks to
large-capacity multi-compartment systems, our solutions are designed to
meet your exact operational profile. With a modular approach and robust
engineering, we deliver reliable systems ready for the harsh conditions
of the tunnelling world."

Product options: Personnel air locks (2–40 persons, single to
multi-compartment, Ø1200–1800mm); Material locks in different sizes;
Medical and therapeutic chambers for decompression/treatment; Mobile life
support containers for TBM/shaft sites; Oxygen breathing systems and gas
management panels; Environmental control units (heating/cooling);
Monitoring and control systems (manual or computer-aided); Complete
tunnel saturation systems up to 20 bar.

Application areas: TBM operations under compressed air; compressed air
interventions and hyperbaric maintenance; access/rescue in pressurised
environments; segmented shaft/tunnel access via modular chambers;
decompression treatment for tunnel workers.

Environmental: Operational to pressures of 10 bar and beyond; support for
compressed air workers/medical personnel; extreme underground
temperatures; ATEX configurations; custom door types (round/rectangular);
modular layout; containerised/stackable/embedded options.

Standards & certification: EN 12110, EN 14931, ASME PVHO; ATEX-certified
components; ISO 13485 certified design/production; PED-compliant safety
valves.

High standards: "Our systems are designed with durability and user
comfort in mind, even in the harshest working conditions. Pressure
chambers and locks feature intuitive controls, easy access, and are built
with materials resistant to corrosion, impact and extreme temperatures."

Safety: "Safety, reliability and quality is the foundation of everything
we build. All systems are engineered with redundancy in critical
systems, emergency bypass functionality and real-time environmental
monitoring."

---

### 4.3 Products landing

Live page currently has almost no real body copy — just a short generic
intro and a filterable grid. Existing intro (usable, weak): "From life
support systems to hyperbaric chambers and safety equipment—our product
portfolio is designed to meet the highest standards across industries.
Whether you operate in governmental services, medical environments,
tunnelling, or commercial diving, you'll find reliable solutions
engineered for performance, compliance, and safety."

"Our product selection is continuously expanding. If you're looking for
something specific and don't see it listed, please don't hesitate to
contact us. We're happy to help you find the right solution."

**Needs real intro copy written for the rebuild** (per decision in §3) —
don't just carry this over as-is; use it as a starting point only.

Current flat SKU list (to be regrouped into families per §2 nav):
Deck Decompression Chamber; DART ATEL; HYOT Triple Lock Hyperbaric Oxygen
Treatment Chamber; Heavy Duty Launch And Recovery System; Launch And
Recovery System Lite; Hyperbaric Oxygen Therapy Chambers (HBO-T); Life
support systems; New & Secondhand equipment available from stock.

---

### 4.4 Service landing

"Hytech-Pommec provides comprehensive service and support for hyperbaric
systems, commercial diving equipment and life support systems. With
decades of experience in pressure-related technology, our specialists
help customers keep their equipment safe, reliable and operational
throughout its lifecycle."

"Our services range from preventive maintenance and inspections to
repairs, (re)certification, training and complete renovations. We adapt
every service to the equipment, application and operational requirements
of the customer."

"As a result, we can support commercial diving companies, medical
institutions, industrial operators and other organisations where safety
and system reliability are essential."

Four service pillars (each links to its own sub-page, content below):
Maintenance and operational reliability; (Re)Certification and
independent testing; Training and technical knowledge; Renovation and
lifecycle support.

**Training** (sub-page):
"At Hytech-Pommec, we believe that equipment is only as effective as the
people who operate it. That's why we offer a range of specialized
training courses designed for professionals working with hyperbaric
systems and breathing apparatus, tailored to the needs of commercial
diving companies, industrial cleaning firms and the medical sector."

Courses offered:
- **Hyperbaric chamber operator training** — often on-site, for daily
  operation and basic troubleshooting; covers system functions, safety
  protocols, emergency procedures.
- **KMDSI repair training** — Hytech-Pommec is an authorised Kirby Morgan
  dealer and service network member; two-day basic repair course covering
  several helmets and band masks, led by a certified KMDSI
  technician/instructor. (2026/2027 dates listed on live site — treat as
  dynamic content, don't hardcode into the template; pull from a simple
  dates list/array so they're easy to update.)
- **Life support operator training** — covers breathing apparatus (BA)
  cases: Panel A (select/control/monitor air supply sources) and Panel B
  (distributes air to up to 4 helmets or 8 masks).

**(Re)Certification** (sub-page): detailed inspections and functional
testing, adapted to equipment type/application. Some systems require
independent verification — Hytech-Pommec coordinates with recognised
bodies (Lloyd's Register, DNV, TÜV).

**Maintenance** (sub-page): "Regular maintenance helps prevent unexpected
downtime and keeps critical components working as intended. Our
technicians inspect, test and calibrate equipment. When necessary, they
also repair or replace components to maintain system reliability."
Service available at Hytech-Pommec's Raamsdonksveer facility or on-site
at the customer's location.

**Renovations** (sub-page): "Existing systems do not always need
replacement. Instead, renovation, upgrades and refurbishment can extend
their service life and adapt them to current operational requirements."
Can include structural modifications, control-system upgrades,
component modernisation, new pressure vessels, or full refurbishment.

---

### 4.5 About us (merged page — About + Mission/Vision per §3)

**About (existing):**
"Shaping the future of hyperbaric technology" — "At Hytech-Pommec, we
design, build and maintain advanced hyperbaric solutions that enable
people to operate safely in the most challenging environments – whether
underwater, underground or in critical care facilities. We serve a wide
range of markets including diving, medical, tunnelling, governmental, and
life support industries."

"As a trusted partner for professionals worldwide, we combine decades of
expertise with a hands-on, customer-focused approach. From tailored
systems to certified servicing, we deliver quality, safety, and
reliability—every step of the way."

(Live site has a company video embed here — placeholder until Largo has
the asset.)

**Mission/Vision (to merge in):**
Mission (styled as a short all-caps statement on the live site):
"INNOVATION, QUALITY AND KNOWLEDGE LEADER IN HYPERBARIC AND DIVING
SOLUTIONS" — "This mission reflects our commitment to pioneering
innovation, delivering uncompromising quality, and sharing deep technical
knowledge with our customers and partners around the world."

Vision: "We envision a future where hyperbaric and diving technologies
enable safer, more efficient, and more sustainable operations across
industries. Hytech-Pommec aims to be the first choice for companies
seeking intelligent solutions and long-term support—by staying at the
forefront of technology, investing in people, and co-creating value with
our clients. By combining cutting-edge engineering with a deep
understanding of user needs, we help shape a safer and more connected
world beneath the surface."

**Distribution network content to fold in here (per §3):**
"Hytech-Pommec operates through a strong international network of
trusted distributors and partners... representing our solutions across
various industries—including Governmental, Medical, Tunnelling, and Life
Support. Wherever you are in the world, reliable support is never far
away." (Map graphic on live site — decide later whether to keep a
simplified version here or drop the map entirely and keep just the text.)

---

### 4.6 Quality (own page)

"Commitment to quality and compliance" — "When safety, reliability, and
performance matter most, compliance with international standards is
essential. Hytech-Pommec designs and manufactures systems that meet the
world's leading guidelines and certifications—helping customers ensure
safe and dependable operations across sectors such as commercial diving,
medical hyperbarics, offshore, and defense."

"On request, systems can be designed and delivered in accordance with:"

- **IMCA guidelines** — International Marine Contractors Association
  best-practice standards for offshore diving systems/support equipment.
  Membership certificate available for download.
- **EN ISO 13485:2016** — design/development/manufacture/service of
  medical hyperbaric treatment chambers for HBO therapy. Certificate
  available for download.
- **SIR guidelines** (Stichting Industriële Reiniging) — safety/
  operational standards for breathing air systems in industrial cleaning
  (NL/BE regulatory context). Certificate available for download.
- **CE marking** — EU health/safety/environmental compliance.
- **Class certification** — independent structural/safety verification
  for maritime/offshore deployment.
- **MDR certification (in progress)** — Medical Device Regulation (EU
  2017/745), currently underway for medical systems.

(Testimonial to dissolve per §3: "a partner who consistently demonstrates
a deep understanding of international standards, and a strong commitment
to safety and technical integrity" — currently attributed only to
"Certification specialist".)

"Working with renowned certification bodies" — collaborates with:
- **Lloyd's Register (LR)** — engineering inspection/compliance, risk
  management, technical assurance.
- **DNV (Det Norske Veritas)** — classification for energy, maritime,
  healthcare sectors.
- **TÜV** — German inspection/certification group; relevant for CE,
  machinery safety, medical equipment.
- **ABS (American Bureau of Shipping)** — maritime/offshore
  classification, especially oil & gas and naval.

---

### 4.7 History (own page — CEO quote removed per §3)

"Roots in commercial diving" — "Hytech-Pommec B.V. was founded through
the merger of two specialized companies: Hytech B.V. and Technical Diving
Equipment Pommec B.V."

"Hytech B.V. was established in 1989 by a group of professionals with
extensive experience in commercial diving. Naturally, this expertise
shaped the company's early activities. Over the years, Hytech expanded
its scope to include life support systems, mobile decompression chambers
(DART & ATEL), hyperbaric oxygen treatment (HBOT) chambers, and
hyperbaric tunnelling systems."

"In 2011, the company was acquired by Royal IHC. Under this ownership,
Hytech further diversified, adding the development of life boats and
large saturation diving systems to its portfolio. In 2016, the company
relocated to a modern facility in Raamsdonksveer."

"A legacy of equipment excellence" — "Technical Diving Equipment Pommec
B.V. (TDE Pommec) was founded in 1978 by Rudi Pommé. The company quickly
built a reputation for the global supply of commercial diving equipment
and accessories. In 2005, TDE Pommec expanded its activities to include
the construction of Launch and Recovery Systems (LARS) and decompression
chambers. In 2019, the company introduced a fully electric E-LARS to its
product line."

**[Quote removed per decision in §3 — do not include any CEO
attribution]**

"A strategic partnership" — "In 2021, both Hytech B.V. and TDE Pommec
B.V. were acquired by a group of investors together with the Pommé
family. They formed Hytech-Pommec Holding B.V., which became the parent
company of both firms. As part of the consolidation, TDE Pommec's
operations were relocated from Bergen op Zoom to the Raamsdonksveer
facility."

"Becoming Hytech-Pommec B.V." — "The collaboration between Hytech and TDE
Pommec created a globally recognized company with a top-three position in
the market segments of Commercial Diving & Life Support, Government, and
Medical sectors. The newly unified company was renamed Hytech-Pommec
B.V.—a name that reflects both its heritage and forward-looking
ambition."

Closing mission line: "To be a global leader in innovation, quality, and
expertise in hyperbaric and diving products and solutions."

---

### 4.8 Careers (Dutch content — per §3, keep in Dutch, add toggle)

"Groei met ons mee – waar techniek tot leven komt"

"Bij Hytech-Pommec draait alles om techniek die ertoe doet. Wij
ontwikkelen en bouwen geavanceerde oplossingen voor hyperbare-, duik- en
life support systemen / toepassingen waar betrouwbaarheid en precisie
letterlijk van levensbelang zijn."

"Achter die techniek staat een team van vakmensen. Mensen die niet alleen
weten wat ze doen, maar er ook trots op zijn. Die graag samenwerken,
meedenken en het beste uit zichzelf én elkaar halen. Want alleen zo
leveren we wereldwijd de kwaliteit waar Hytech-Pommec om bekend staat."

"Of je nu graag sleutelt in de werkplaats, technische vraagstukken
oplost als engineer, internationaal op pad gaat als field service
specialist of juist op kantoor het verschil maakt in bijvoorbeeld
inkoop, finance of sales — bij ons krijg je de ruimte om te groeien,
jezelf te ontwikkelen en echt impact te maken."

"We zijn continu op zoek naar talenten die het verschil willen maken.
Staat jouw ideale functie er niet tussen? Dan maken we graag alsnog
kennis met je."

Open application: Yvonne@KuiperRecruitment.nl / +31 626236716.
"Het recruitment is volledig uitbesteed en in handen van Kuiper
Recruitment, die het gehele proces begeleidt."

"Op dit moment hebben we geen openstaande vacatures. Je open sollicitatie
is altijd welkom!"

(Recruitment is fully outsourced to an external agency — Kuiper
Recruitment — worth keeping that framing intact rather than implying
Hytech-Pommec handles applications directly.)

---

### 4.9 Contact (restructured per Largo's note that current layout "makes
no sense")

Current live content (for reference — restructure, don't just copy):
"Connect with Hytech-Pommec" — "Whether you have a question, need advice,
or want to schedule a meeting – just reach out. You can call, email, or
use the contact form. We're here to help you move forward!"

Contact blocks by department:
- **Sales** — sales@hytech-pommec.com / +31 (0)85 792 43 00
- **Service** — service@hytech-pommec.com / +31 (0)85 792 43 00
- **Accounting** — accounting@hytech-pommec.com / +31 (0)85 792 43 00

Plus a contact form (Question about: Sales/Service/Other; Name; Company
name (optional); Email; Phone (optional); Message) that repeats the
same generic phone/email again above it — this duplication is what reads
oddly. For the rebuild: lead with the department contact blocks, then
the form once, without repeating the same phone number a third time on
the page.

---

### 4.10 Updates

Blog/news listing, reverse-chronological. Currently mixes English and
Dutch post titles inconsistently and has no categorization/filtering.
For the rebuild: keep it simple (title + date + link), English titles
going forward, structure so posts are easy to add (e.g. one file per post
or a simple array) rather than needing template changes per post.

---

## 5. Open items (not yet resolved)

- Real partner/distributor logos for "We proudly represent" — not yet
  supplied
- Real photography — all current images excluded from this brief;
  placeholders needed until assets are provided
- Whether any of the dissolved testimonials were real, attributable
  quotes (Largo checking wp-admin + Carin)
- Real logo files (currently building as styled text per §1)
- Social media links (currently "#" placeholders)
