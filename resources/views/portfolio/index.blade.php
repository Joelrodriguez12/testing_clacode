<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Invitaciones - Laravel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 50px;
            color: white;
        }
        .header h1 {
            font-size: 56px;
            margin-bottom: 15px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
            animation: fadeInDown 0.8s ease-out;
        }
        .header p {
            font-size: 22px;
            opacity: 0.95;
            animation: fadeInUp 0.8s ease-out;
        }
        .tech-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 25px;
            margin-top: 15px;
            font-size: 16px;
            backdrop-filter: blur(10px);
        }
        .invitations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .invitation-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            cursor: pointer;
            animation: fadeInUp 0.6s ease-out backwards;
        }
        .invitation-card:nth-child(1) { animation-delay: 0.1s; }
        .invitation-card:nth-child(2) { animation-delay: 0.2s; }
        .invitation-card:nth-child(3) { animation-delay: 0.3s; }
        .invitation-card:nth-child(4) { animation-delay: 0.4s; }
        .invitation-card:nth-child(5) { animation-delay: 0.5s; }
        .invitation-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }
        .card-header {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            position: relative;
            overflow: hidden;
        }
        .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: inherit;
            filter: brightness(0.9);
        }
        .card-icon {
            position: relative;
            z-index: 1;
            animation: bounce 2s ease-in-out infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .birthday-kids {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .birthday-adult {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
        }
        .baptism {
            background: linear-gradient(135deg, #89CFF0 0%, #B0E0E6 100%);
        }
        .quinceanera {
            background: linear-gradient(135deg, #FFC0CB 0%, #FFB6C1 100%);
        }
        .religious {
            background: linear-gradient(135deg, #FFFACD 0%, #F0E68C 100%);
        }
        .card-body {
            padding: 25px;
        }
        .card-title {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 12px;
            font-weight: bold;
        }
        .card-description {
            font-size: 15px;
            color: #7f8c8d;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .card-link {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        .card-link:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }
        .features {
            margin-top: 60px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            color: white;
            text-align: center;
        }
        .features h2 {
            font-size: 32px;
            margin-bottom: 30px;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        .feature-item {
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        .feature-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }
        .feature-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .feature-text {
            font-size: 14px;
            opacity: 0.9;
        }
        .footer {
            text-align: center;
            margin-top: 60px;
            padding: 30px;
            color: white;
            font-size: 16px;
        }
        .footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-bottom: 2px solid white;
            transition: all 0.3s ease;
        }
        .footer a:hover {
            opacity: 0.8;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🎨 Portfolio de Invitaciones</h1>
            <p>Diseños elegantes y creativos para tus eventos especiales</p>
            <div class="tech-badge">
                ⚡ Desarrollado con Laravel {{ app()->version() }}
            </div>
        </div>

        <div class="invitations-grid">
            <!-- Birthday Kids -->
            <div class="invitation-card">
                <div class="card-header birthday-kids">
                    <div class="card-icon">🎈</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Cumpleaños Infantil</h3>
                    <p class="card-description">
                        Invitación colorida y divertida, perfecta para celebraciones infantiles con temática de globos y diversión.
                    </p>
                    <a href="{{ route('invitations.birthday.kids') }}" class="card-link">Ver Invitación →</a>
                </div>
            </div>

            <!-- Birthday Adult -->
            <div class="invitation-card">
                <div class="card-header birthday-adult">
                    <div class="card-icon">🎉</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Cumpleaños Elegante</h3>
                    <p class="card-description">
                        Diseño sofisticado y elegante para celebraciones de cumpleaños de adultos con estilo formal.
                    </p>
                    <a href="{{ route('invitations.birthday.adult') }}" class="card-link">Ver Invitación →</a>
                </div>
            </div>

            <!-- Baptism -->
            <div class="invitation-card">
                <div class="card-header baptism">
                    <div class="card-icon">🕊️</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Bautizo</h3>
                    <p class="card-description">
                        Invitación celestial y tierna para celebrar el sacramento del bautismo con paz y alegría.
                    </p>
                    <a href="{{ route('invitations.baptism') }}" class="card-link">Ver Invitación →</a>
                </div>
            </div>

            <!-- Quinceañera -->
            <div class="invitation-card">
                <div class="card-header quinceanera">
                    <div class="card-icon">👑</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">XV Años</h3>
                    <p class="card-description">
                        Diseño de ensueño para celebrar los 15 años con elegancia, brillo y estilo princesa.
                    </p>
                    <a href="{{ route('invitations.quinceanera') }}" class="card-link">Ver Invitación →</a>
                </div>
            </div>

            <!-- Religious Celebration -->
            <div class="invitation-card">
                <div class="card-header religious">
                    <div class="card-icon">🍷</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Primera Comunión</h3>
                    <p class="card-description">
                        Invitación sagrada y especial para celebrar la primera comunión con fe y amor.
                    </p>
                    <a href="{{ route('invitations.religious') }}" class="card-link">Ver Invitación →</a>
                </div>
            </div>
        </div>

        <div class="features">
            <h2>✨ Características de las Invitaciones</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">🎨</div>
                    <div class="feature-title">Diseño Moderno</div>
                    <div class="feature-text">Interfaces atractivas y profesionales</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📱</div>
                    <div class="feature-title">Responsive</div>
                    <div class="feature-text">Perfectas en cualquier dispositivo</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <div class="feature-title">Animaciones</div>
                    <div class="feature-text">Efectos suaves y elegantes</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🎯</div>
                    <div class="feature-title">Personalizables</div>
                    <div class="feature-text">Fáciles de adaptar a tus necesidades</div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>Desarrollado con Laravel Framework</p>
            <p style="margin-top: 10px; opacity: 0.8;">
                Portfolio de Invitaciones Web © {{ date('Y') }}
            </p>
        </div>
    </div>
</body>
</html>
