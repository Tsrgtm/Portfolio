<div class="flex justify-center">
    <svg class="w-full h-auto" viewBox="0 0 1200 260" xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="xMidYMid meet">

        <defs>
            <pattern id="pixelPattern" x="0" y="0" width="12" height="12" patternUnits="userSpaceOnUse">
                <rect x="1" y="1" width="8" height="8" rx="2" class="fill-laravel"></rect>
            </pattern>

            <pattern id="pixelPatternBlue" x="0" y="0" width="12" height="12" patternUnits="userSpaceOnUse">
                <rect x="1" y="1" width="8" height="8" rx="2" class="fill-black dark:fill-white">
                </rect>
            </pattern>

            <mask id="revealMask">
                <rect x="0" y="0" width="0" height="260" fill="white">
                    <animate attributeName="width" from="0" to="1200" dur="2s" begin="0.2s"
                        fill="freeze" />
                </rect>
            </mask>

            <clipPath id="leftClip">
                <rect x="0" y="0" width="620" height="260" />
            </clipPath>

            <clipPath id="rightClip">
                <rect x="620" y="0" width="580" height="260" />
            </clipPath>

            <filter id="outline" x="-20%" y="-20%" width="140%" height="140%">
                <feMorphology operator="dilate" radius="1" in="SourceAlpha" result="dilated" />
                <feComposite in="dilated" in2="SourceAlpha" operator="xor" result="edge" />
                <feColorMatrix in="edge" type="matrix"
                    values="0 0 0 0 0
                            0 0 0 0 0
                            0 0 0 0 0
                            0 0 0 0.6"
                    result="edgeColor" />
                <feMerge>
                    <feMergeNode in="edgeColor" />
                    <feMergeNode in="SourceGraphic" />
                </feMerge>
            </filter>
        </defs>

        <g font-family="Monospace, Inter, ui-monospace, monospace" font-weight="700" font-size="160"
            text-anchor="middle" dominant-baseline="middle">

            <text x="600" y="130" fill="url(#pixelPattern)" style="letter-spacing:8px; filter:url(#outline);"
                mask="url(#revealMask)" clip-path="url(#leftClip)">
                HELLO WORLD
            </text>

            <text x="600" y="130" fill="url(#pixelPatternBlue)" style="letter-spacing:8px; filter:url(#outline);"
                mask="url(#revealMask)" clip-path="url(#rightClip)">
                HELLO WORLD
            </text>
        </g>

        <rect x="0" y="0" width="1200" height="260" fill="transparent" style="cursor:pointer"
            onclick="(function(){ const anim=document.querySelector('#revealMask rect animate'); anim.beginElement(); })()">
        </rect>

    </svg>
</div>
