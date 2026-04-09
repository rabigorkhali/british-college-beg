<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>BEG(British Educational Group)</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed-dim": "#ffb4a4",
                        "on-tertiary-fixed": "#3d0600",
                        "secondary-fixed-dim": "#bfc4ec",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#e1e3e4",
                        "secondary-container": "#cfd5fd",
                        "outline": "#757683",
                        "on-tertiary-container": "#d96f57",
                        "primary-fixed-dim": "#b9c3ff",
                        "on-primary-fixed-variant": "#2d3f93",
                        "inverse-on-surface": "#f0f1f2",
                        "primary": "#000a3f",
                        "background": "#f8f9fa",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#dee1ff",
                        "tertiary-container": "#510a00",
                        "on-primary-fixed": "#001258",
                        "on-tertiary-fixed-variant": "#7e2b19",
                        "surface-bright": "#f8f9fa",
                        "surface-container": "#edeeef",
                        "surface": "#f8f9fa",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#b9c3ff",
                        "surface-container-low": "#f3f4f5",
                        "on-primary-container": "#7688e0",
                        "secondary": "#565c7f",
                        "surface-tint": "#4658ac",
                        "on-secondary-fixed-variant": "#3f4566",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#2b0300",
                        "error-container": "#ffdad6",
                        "surface-variant": "#e1e3e4",
                        "on-error": "#ffffff",
                        "on-background": "#191c1d",
                        "inverse-surface": "#2e3132",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#ffdad2",
                        "surface-dim": "#d9dadb",
                        "on-secondary-fixed": "#131938",
                        "secondary-fixed": "#dee1ff",
                        "outline-variant": "#c5c5d3",
                        "error": "#ba1a1a",
                        "on-surface": "#191c1d",
                        "on-secondary-container": "#555b7e",
                        "surface-container-high": "#e7e8e9",
                        "primary-container": "#001a72",
                        "on-surface-variant": "#454651"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Public Sans"],
                        "body": ["Public Sans"],
                        "label": ["Public Sans"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Public Sans', sans-serif;
        }

        .hero-title {
            text-shadow: 0 3px 18px rgba(0, 0, 0, 0.55);
        }

        .hero-copy {
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.5);
        }

        .hero-badge {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
        }

        .hero-logo-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .hero-logo-img {
            width: 300px;
            max-width: 100%;
            height: 84px;
            object-fit: contain;
            filter: drop-shadow(0 10px 22px rgba(0, 0, 0, 0.35));
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.65rem;
            white-space: nowrap;
            flex-shrink: 0;
            width: 220px;
            height: 52px;
            border-radius: 0.75rem;
            font-size: 0.98rem;
            letter-spacing: 0.01em;
            position: relative;
            overflow: hidden;
            transition: transform 220ms ease, box-shadow 280ms ease, background-color 220ms ease;
        }

        .action-btn::after {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 70%;
            height: 100%;
            background: linear-gradient(110deg, transparent 20%, rgba(255, 255, 255, 0.38) 50%, transparent 80%);
            transition: left 360ms ease;
        }

        .action-btn:hover {
            transform: translateY(-3px);
        }

        .action-btn:hover::after {
            left: 130%;
        }

        .btn-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            transition: transform 220ms ease;
        }

        .action-btn:hover .btn-icon {
            transform: translateX(4px);
        }

        .btn-blue {
            background: #2aaee8;
            color: #ffffff;
            box-shadow: 0 14px 30px rgba(13, 133, 183, 0.42);
        }

        .btn-red {
            background: #e5485e;
            color: #fff7f8;
            box-shadow: 0 14px 30px rgba(176, 45, 68, 0.45);
        }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- TopNavBar Component -->

    <!-- Hero Split Section -->
    <main class="min-h-screen flex flex-col md:flex-row">
        <!-- Left: Kathmandu -->
        <section
            class="relative w-full md:w-1/2 min-h-[614px] md:min-h-screen flex items-center justify-center group overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                    data-alt="Modern architectural campus building in Kathmandu at sunset, soft warm golden light hitting brick and glass facades with Himalayan foothills background"
                    src="{{asset('assets/images/apply/bmc.webp')}}" />
                <div
                    class="absolute inset-0 bg-primary/40 backdrop-brightness-85 transition-opacity group-hover:opacity-75">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-primary/25 to-primary/5"></div>
            </div>
            <div class="relative z-10 p-8 md:p-16 max-w-xl text-left">
                <div class="hero-logo-row rounded-lg " style="background-color: rgb(255, 243, 243); width: 50%; ;">
                    <img class=" hero-logo-img" src="{{asset('assets/images/apply/bmc_beg.png')}}" alt="British Model College logo" />
                </div>

                <h1 class="hero-title text-5xl md:text-4xl font-extrabold text-white leading-[1.1] mb-6 tracking-tighter"
                    style="line-height: 1.3;">
                    Apply for A-Levels in <span class="city-kathmandu"
                        style="color: rgb(245, 143, 143);">Kathmandu</span>
                </h1>
               
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://www.britishmodelcollege.edu.np/apply-now" target="_blank" rel="noopener noreferrer"
                        class="action-btn btn-blue p-4 font-bold rounded-lg transition-all hover:translate-y-[-2px] hover:shadow-[0_24px_48px_rgba(0,10,63,0.2)]">
                        <span>Apply Now</span>
                        <span class="btn-icon" aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                </div>
            </div>
        </section>
        <!-- Right: Global Program -->
        <section
            class="relative w-full md:w-1/2 min-h-[614px] md:min-h-screen flex items-center justify-center group overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                    data-alt="Diverse group of professional graduate students collaborating in a high-tech glass-walled modern office space with global city skyline background"
                    src="{{asset('assets/images/apply/cosomos.png')}}" />
                <div
                    class="absolute inset-0 bg-tertiary-container/60 backdrop-brightness-85 transition-opacity group-hover:opacity-75">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-tertiary/70 via-tertiary/25 to-tertiary/5"></div>
            </div>
            <div class="relative z-10 p-8 md:p-16 max-w-xl text-left">
                <div class="hero-logo-row rounded-lg " style="background-color: rgb(255, 243, 243); width: 50%; ;">
                    <img class="hero-logo-img" src="{{asset('assets/images/apply/cosmos_logo.svg')}}" alt="British Model College logo" />
                </div>

                <h1 class="hero-title text-5xl md:text-4xl font-extrabold text-white leading-[1.1] mb-6 tracking-tighter"
                    style="line-height: 1.3;">
                    Apply for A-Levels in <span class="city-pokhara" style="color: rgb(147 159 247);">Pokhara</span>
                </h1>
                

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://www.cosmos.edu.np/apply-now" target="_blank" rel="noopener noreferrer"
                        class="action-btn btn-red p-4 font-bold rounded-lg transition-all hover:translate-y-[-2px] hover:shadow-[0_24px_48px_rgba(43,3,0,0.2)]">
                        <span>Apply Now</span>
                        <span class="btn-icon" aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                </div>
            </div>
        </section>
    </main>
    <!-- Statistics Section (Bento Layout) -->

    <!-- Footer Component -->

</body>

</html>