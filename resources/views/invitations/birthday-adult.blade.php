<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación de Cumpleaños Elegante</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e22ce 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .invitation-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 15px;
            padding: 0;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            border: 2px solid #d4af37;
        }
        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
            opacity: 0.3;
        }
        .sparkle {
            color: #d4af37;
            font-size: 40px;
            animation: sparkle 2s ease-in-out infinite;
        }
        @keyframes sparkle {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }
        h1 {
            color: #d4af37;
            font-size: 48px;
            margin: 20px 0;
            font-weight: normal;
            letter-spacing: 3px;
            position: relative;
        }
        .subtitle {
            color: #ecf0f1;
            font-size: 20px;
            font-style: italic;
            letter-spacing: 2px;
        }
        .content {
            padding: 50px 40px;
        }
        .honoree {
            text-align: center;
            margin-bottom: 40px;
        }
        .honoree-name {
            font-size: 42px;
            color: #2c3e50;
            margin: 15px 0;
            font-weight: bold;
        }
        .age-celebration {
            font-size: 28px;
            color: #7e22ce;
            font-style: italic;
        }
        .divider {
            width: 200px;
            height: 2px;
            background: linear-gradient(to right, transparent, #d4af37, transparent);
            margin: 30px auto;
        }
        .details {
            background: white;
            border-left: 4px solid #d4af37;
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .detail-item {
            display: flex;
            margin: 20px 0;
            font-size: 18px;
            color: #2c3e50;
            align-items: flex-start;
        }
        .detail-label {
            font-weight: bold;
            min-width: 100px;
            color: #7e22ce;
        }
        .detail-value {
            flex: 1;
            color: #34495e;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-top: 2px solid #d4af37;
        }
        .rsvp {
            font-size: 20px;
            color: #2c3e50;
            margin-bottom: 15px;
            font-style: italic;
        }
        .contact {
            font-size: 16px;
            color: #7e22ce;
            font-weight: bold;
        }
        .dress-code {
            margin-top: 20px;
            padding: 15px;
            background: #fff3cd;
            border-radius: 10px;
            font-size: 16px;
            color: #856404;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
            transition: all 0.3s;
            z-index: 10;
            font-family: Arial, sans-serif;
        }
        .back-link:hover {
            background: white;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <a href="{{ route('home') }}" class="back-link">← Volver</a>

    <div class="invitation-card">
        <div class="header">
            <div class="sparkle">✨ ⭐ ✨</div>
            <h1>CELEBRACIÓN</h1>
            <div class="subtitle">Tiene el placer de invitarle a</div>
        </div>

        <div class="content">
            <div class="honoree">
                <div style="font-size: 24px; color: #7e22ce;">La Fiesta de Cumpleaños de</div>
                <div class="honoree-name">Ricardo Martínez</div>
                <div class="age-celebration">30 Años de Alegría</div>
            </div>

            <div class="divider"></div>

            <div class="details">
                <div class="detail-item">
                    <span class="detail-label">📅 Fecha:</span>
                    <span class="detail-value">Viernes, 20 de Diciembre, 2024</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">🕗 Hora:</span>
                    <span class="detail-value">8:00 PM</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">📍 Lugar:</span>
                    <span class="detail-value">
                        Salón Jardín "Los Olivos"<br>
                        Calle de las Rosas #456<br>
                        Ciudad de México
                    </span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">🍽️ Incluye:</span>
                    <span class="detail-value">Cena, bebidas y música en vivo</span>
                </div>
            </div>

            <div class="dress-code">
                <strong>👔 Código de Vestimenta:</strong> Semi-formal / Elegante
            </div>
        </div>

        <div class="footer">
            <div class="rsvp">Confirma tu asistencia</div>
            <div class="contact">📱 Tel: +52 55 1234 5678</div>
            <div class="contact">✉️ Email: ricardo@email.com</div>
            <div style="margin-top: 20px; color: #95a5a6; font-size: 14px;">
                ¡Tu presencia es el mejor regalo!
            </div>
        </div>
    </div>
</body>
</html>
