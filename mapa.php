<!-- Main Content -->
    <main>
        <!-- Hero Section - Interactive Mind Map -->
        <section id="home" class="min-h-screen flex flex-col items-center justify-center pt-24 pb-12 bg-white">
            <div class="text-center mb-8 px-4">
                <h1 class="text-4xl md:text-5xl font-bold text-brand-pink-dark mb-2">Bem-vinda!</h1>
                <p class="text-lg text-gray-600">Clique nos ramos do mapa para explorar e se fortalecer.</p>
            </div>
            <div class="w-full max-w-4xl mx-auto px-4">
                <svg id="mind-map" viewBox="0 0 800 600" preserveAspectRatio="xMidYMid meet">
                    <!-- Center Node (Logo) -->
                    <g class="mind-map-node" id="node-logo">
                        <circle class="node-circle" cx="400" cy="150" r="70" fill="#aa0084"/>
                        <text x="400" y="145" font-size="18" fill="white" text-anchor="middle" font-weight="bold">Siga em</text>
                        <text x="400" y="165" font-size="18" fill="white" text-anchor="middle" font-weight="bold">Frente,</text>
                        <text x="400" y="185" font-size="18" fill="white" text-anchor="middle" font-weight="bold">Mulher!</text>
                    </g>
                    <!-- Main Branches -->
                    <path class="mind-map-line" d="M 400 220 Q 300 285 200 350"/>
                    <path class="mind-map-line" d="M 400 220 Q 500 285 600 350"/>

                    <!-- Main Node: Quem Somos -->
                    <g class="mind-map-node" id="node-quem-somos" onclick="openModal('modal-quem-somos')">
                        <circle class="node-circle" cx="200" cy="350" r="70" fill="#da066d"/>
                        <text class="node-text" x="200" y="355" font-size="16" fill="white" text-anchor="middle">Quem Somos</text>
                    </g>
                    
                    <!-- Main Node: Tipos de Violência -->
                    <g class="mind-map-node" id="node-violencia">
                        <circle class="node-circle" cx="600" cy="350" r="70" fill="#da066d"/>
                        <text class="node-text" x="600" y="355" font-size="14" fill="white" text-anchor="middle" style="pointer-events: none;">Tipos de Violência</text>
                        
                        <!-- Sub-branches for Violencia (Radial Layout) -->
                        <path class="mind-map-sub-line" d="M 600 350 Q 665 350 730 350" />
                        <g class="mind-map-sub-node" onclick="openModal('modal-violencia-fisica')">
                            <circle class="node-circle" cx="730" cy="350" r="40" fill="#fb6969"/><text class="node-text" x="730" y="355" font-size="12" fill="white" text-anchor="middle">Física</text>
                        </g>

                        <path class="mind-map-sub-line" d="M 600 350 Q 632.5 293.5 665 237" />
                        <g class="mind-map-sub-node" onclick="openModal('modal-violencia-psicologica')">
                            <circle class="node-circle" cx="665" cy="237" r="40" fill="#fb6969"/><text class="node-text" x="665" y="242" font-size="12" fill="white" text-anchor="middle">Psicológica</text>
                        </g>

                        <path class="mind-map-sub-line" d="M 600 350 Q 567.5 293.5 535 237" />
                        <g class="mind-map-sub-node" onclick="openModal('modal-violencia-sexual')">
                            <circle class="node-circle" cx="535" cy="237" r="40" fill="#fb6969"/><text class="node-text" x="535" y="242" font-size="12" fill="white" text-anchor="middle">Sexual</text>
                        </g>

                        <path class="mind-map-sub-line" d="M 600 350 Q 535 350 470 350" />
                        <g class="mind-map-sub-node" onclick="openModal('modal-violencia-patrimonial')">
                            <circle class="node-circle" cx="470" cy="350" r="40" fill="#fb6969"/><text class="node-text" x="470" y="355" font-size="12" fill="white" text-anchor="middle">Patrimonial</text>
                        </g>
                        
                        <path class="mind-map-sub-line" d="M 600 350 Q 567.5 406.5 535 463" />
                        <g class="mind-map-sub-node" onclick="openModal('modal-violencia-moral')">
                            <circle class="node-circle" cx="535" cy="463" r="40" fill="#fb6969"/><text class="node-text" x="535" y="468" font-size="12" fill="white" text-anchor="middle">Moral</text>
                        </g>
                        
                        <path class="mind-map-sub-line" d="M 600 350 Q 632.5 406.5 665 463" />
                        <g class="mind-map-sub-node" onclick="openModal('modal-violencia-institucional')">
                            <circle class="node-circle" cx="665" cy="463" r="40" fill="#fb6969"/><text class="node-text" x="665" y="468" font-size="12" fill="white" text-anchor="middle">Institucional</text>
                        </g>
                    </g>
                </svg>
                
            </div>
        </section>
