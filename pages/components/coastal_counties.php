<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .map-outer {
        position: relative;
        display: inline-block;
        width: 100%;
        max-width: 520px;
    }

    .map-outer img {
        width: 100%;
        display: block;
    }

    .hotspot {
        position: absolute;
        transform: translate(-50%, -100%);
        z-index: 20;
    }

    .hs-btn {
        background: #1A3A8F;
        color: #fff;
        border: none;
        border-radius: 999px;
        padding: 6px 14px;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        white-space: nowrap;
        position: relative;
        display: inline-block;
        font-family: sans-serif;
        letter-spacing: 0.2px;
        transition: background 0.15s;
        /* Pulsating animation */
        animation: pulse 2s infinite ease-in-out;
        box-shadow: 0 0 0 0 rgba(26, 58, 143, 0.5);
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(26, 58, 143, 0.5);
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 0 0 8px rgba(26, 58, 143, 0);
        }
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(26, 58, 143, 0);
        }
    }

    /* Pause animation on hover */
    .hs-btn:hover {
        animation: none;
        background: #2B55C5;
    }

    /* Active state overrides animation */
    .hs-btn.active {
        background: #2B55C5;
        animation: none;
        box-shadow: 0 0 0 3px rgba(26, 58, 143, 0.3);
    }

    .hs-btn::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 6px solid transparent;
        border-top-color: #1A3A8F;
    }

    .hs-btn.active::after {
        border-top-color: #2B55C5;
    }

    .hs-tooltip {
        display: none;
        position: absolute;
        bottom: calc(100% + 8px);
        left: 50%;
        transform: translateX(-50%);
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 12px 14px;
        min-width: 220px;
        font-family: sans-serif;
        font-size: 12px;
        color: #222;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.18);
        z-index: 999;
        pointer-events: none;
        text-align: left;
    }

    .hs-tooltip::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 7px solid transparent;
        border-top-color: #fff;
    }

    .hs-tooltip::before {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border: 8px solid transparent;
        border-top-color: #ccc;
    }

    .hs-tooltip.show {
        display: block;
    }

    .hs-tooltip strong {
        display: block;
        font-size: 11px;
        color: #1A3A8F;
        margin-bottom: 7px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.3px;
    }

    .hs-tooltip ol {
        padding-left: 16px;
        margin: 0;
    }

    .hs-tooltip ol li {
        margin-bottom: 3px;
        line-height: 1.45;
        color: #333;
    }

    /* County legend pills */
    .county-legend-pills {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 6px;
        margin-top: 16px;
    }

    .county-pill {
        display: inline-block;
        padding: 4px 14px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        border: 1.5px solid transparent;
        transition: all 0.15s;
        font-family: sans-serif;
    }

    .county-pill:hover {
        opacity: 0.85;
    }

    .county-pill.active {
        border-width: 2px;
        border-style: solid;
    }

    /* Optional: Different pulse colors for each county (if you want) */
    <?php foreach ($counties as $county): ?>
    #btn-<?php echo $county['id']; ?>.pulse-<?php echo $county['id']; ?> {
        animation: pulse<?php echo $county['id']; ?> 2s infinite ease-in-out;
    }
    
    @keyframes pulse<?php echo $county['id']; ?> {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 <?php echo $county['color']; ?>80;
        }
        50% {
            transform: scale(1.05);
            box-shadow: 0 0 0 8px <?php echo $county['color']; ?>00;
        }
        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 <?php echo $county['color']; ?>00;
        }
    }
    <?php endforeach; ?>
</style>
<div class="col-lg-6" style="transform: translateY(40px);">
    <div class="text-center">
        <h4 class="text-center fw-bold mb-4">Our Six Coastal Counties</h4>
        <div class="map-outer mx-auto" id="mapwrap">
            <img
                id="mapimg"
                src="assets/images/costalmap.png"
                alt="Kenya Counties Map"
                onload="initHotspots()" />
            <div id="hs-container"></div>
        </div>

        <!-- County Pills Legend -->
        <div class="county-legend-pills" id="pills"></div>

    </div>
</div>

<script>
    const counties = [{
            id: "tana-river",
            name: "Tana River",
            color: "#C0392B",
            tx: 66 ,
            ty: 63,
            advantages: ["Agribusiness", "Textile", "Livestock Value Chain", "Blue Economy"]
        },
        {
            id: "lamu",
            name: "Lamu",
            color: "#D4A017",
            tx: 86,
            ty: 71,
            advantages: ["Blue Economy", "Manufacturing & SEZs", "Tourism Resort City", "Off-shore Oil & Gas Exploration", "Port & Logistics"]
        },
        {
            id: "kilifi",
            name: "Kilifi",
            color: "#D4680A",
            tx: 68,
            ty: 83,
            advantages: ["Blue Economy", "Extractives", "Manufacturing & SEZs", "Tourism Resort City", "Agribusiness", "Pwani University"]
        },
        {
            id: "taita-taveta",
            name: "Taita Taveta",
            color: "#8B5E3C",
            tx: 48,
            ty: 87,
            advantages: ["Mining", "Agribusiness", "Livestock Value Chain", "Tourism (Tsavo)", "Taita Taveta University", "Blue Economy"]
        },
        {
            id: "kwale",
            name: "Kwale",
            color: "#27AE60",
            tx: 64,
            ty: 98,
            advantages: ["Blue Economy", "Manufacturing & SEZs", "Tourism Resort City", "Off-shore Oil & Gas Exploration", "Port & Logistics"]
        },
        {
            id: "mombasa",
            name: "Mombasa",
            color: "#1A3A8F",
            tx: 74,
            ty: 92,
            advantages: ["Blue Economy", "Manufacturing & SEZs", "Technical University of Mombasa", "Port & Logistics"]
        }
    ];

    let pinned = null;

    function initHotspots() {
        const container = document.getElementById('hs-container');
        const pillsEl = document.getElementById('pills');
        container.innerHTML = '';
        pillsEl.innerHTML = '';

        counties.forEach(function(c) {
            // Hotspot wrapper
            var hs = document.createElement('div');
            hs.className = 'hotspot';
            hs.id = 'hs-' + c.id;
            hs.style.left = c.tx + '%';
            hs.style.top = c.ty + '%';

            // Tooltip
            var tip = document.createElement('div');
            tip.className = 'hs-tooltip';
            tip.id = 'tip-' + c.id;
            tip.innerHTML =
                '<strong>Competitiveness &amp; comparative advantage</strong>' +
                '<ol>' + c.advantages.map(function(a) {
                    return '<li>' + a + '</li>';
                }).join('') + '</ol>';

            // Button
            var btn = document.createElement('button');
            btn.className = 'hs-btn';
            btn.id = 'btn-' + c.id;
            btn.textContent = c.name;
            btn.addEventListener('mouseenter', function() {
                openCounty(c.id);
            });
            btn.addEventListener('mouseleave', function() {
                closeIfNotPinned(c.id);
            });
            btn.addEventListener('click', function() {
                pinCounty(c.id);
            });

            hs.appendChild(tip);
            hs.appendChild(btn);
            container.appendChild(hs);

            // Pill
            var pill = document.createElement('span');
            pill.className = 'county-pill';
            pill.id = 'pill-' + c.id;
            pill.style.background = c.color + '22';
            pill.style.color = c.color;
            pill.textContent = c.name;
            pill.addEventListener('click', function() {
                pinCounty(c.id);
            });
            pillsEl.appendChild(pill);
        });
    }

    function openCounty(id) {
        document.getElementById('tip-' + id).classList.add('show');
        document.getElementById('btn-' + id).classList.add('active');
    }

    function closeIfNotPinned(id) {
        if (pinned !== id) {
            document.getElementById('tip-' + id).classList.remove('show');
            document.getElementById('btn-' + id).classList.remove('active');
        }
    }

    function pinCounty(id) {
        // Unpin previous
        if (pinned && pinned !== id) {
            document.getElementById('tip-' + pinned).classList.remove('show');
            document.getElementById('btn-' + pinned).classList.remove('active');
            document.getElementById('pill-' + pinned).classList.remove('active');
            document.getElementById('pill-' + pinned).style.borderColor = 'transparent';
        }
        // Toggle off if same
        if (pinned === id) {
            pinned = null;
            document.getElementById('tip-' + id).classList.remove('show');
            document.getElementById('btn-' + id).classList.remove('active');
            document.getElementById('pill-' + id).classList.remove('active');
            document.getElementById('pill-' + id).style.borderColor = 'transparent';
            return;
        }
        pinned = id;
        document.getElementById('tip-' + id).classList.add('show');
        document.getElementById('btn-' + id).classList.add('active');
        document.getElementById('pill-' + id).classList.add('active');
        document.getElementById('pill-' + id).style.borderColor = counties.find(function(c) {
            return c.id === id;
        }).color;
    }

    // Close on outside click
    document.addEventListener('click', function(e) {
        if (pinned &&
            !e.target.closest('#hs-container') &&
            !e.target.closest('#pills')) {
            document.getElementById('tip-' + pinned).classList.remove('show');
            document.getElementById('btn-' + pinned).classList.remove('active');
            document.getElementById('pill-' + pinned).classList.remove('active');
            document.getElementById('pill-' + pinned).style.borderColor = 'transparent';
            pinned = null;
        }
    });

    // Fallback if image already cached
    if (document.getElementById('mapimg') && document.getElementById('mapimg').complete) {
        initHotspots();
    }
</script>