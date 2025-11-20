<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación de Quinceañera</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Didot', 'Bodoni MT', 'Georgia', serif;
            background: linear-gradient(135deg, #FFC0CB 0%, #FFB6C1 25%, #DDA0DD 75%, #DA70D6 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .invitation-card {
            background: linear-gradient(135deg, #FFFFFF 0%, #FFF5F7 100%);
            border-radius: 25px;
            padding: 0;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 30px 60px rgba(218, 112, 214, 0.4);
            overflow: hidden;
            border: 4px solid #FFD700;
            position: relative;
        }
        .invitation-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, #FFD700, #FFC0CB, #FFD700);
        }
        .header {
            background: linear-gradient(135deg, #FFB6C1 0%, #FFC0CB 100%);
            padding: 50px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .crown {
            font-size: 70px;
            margin-bottom: 15px;
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .sparkles {
            position: absolute;
            font-size: 30px;
            animation: twinkle 1.5s ease-in-out infinite;
        }
        .sparkles:nth-child(1) { top: 30px; left: 50px; animation-delay: 0s; }
        .sparkles:nth-child(2) { top: 40px; right: 60px; animation-delay: 0.5s; }
        .sparkles:nth-child(3) { bottom: 40px; left: 70px; animation-delay: 1s; }
        .sparkles:nth-child(4) { bottom: 50px; right: 50px; animation-delay: 1.5s; }
        @keyframes twinkle {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.8); }
        }
        h1 {
            color: #C71585;
            font-size: 52px;
            margin: 15px 0;
            font-weight: normal;
            letter-spacing: 4px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .number {
            font-size: 80px;
            color: #FFD700;
            font-weight: bold;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);
            margin: 10px 0;
        }
        .subtitle {
            color: #C71585;
            font-size: 22px;
            font-style: italic;
            margin-top: 10px;
        }
        .content {
            padding: 45px 40px;
        }
        .honoree {
            text-align: center;
            margin: 30px 0;
        }
        .honoree-intro {
            font-size: 20px;
            color: #DA70D6;
            margin-bottom: 15px;
        }
        .honoree-name {
            font-size: 48px;
            color: #C71585;
            font-weight: bold;
            margin: 20px 0;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .divider {
            width: 250px;
            height: 3px;
            background: linear-gradient(to right, transparent, #FFD700, transparent);
            margin: 30px auto;
        }
        .parents {
            text-align: center;
            font-size: 18px;
            color: #8B008B;
            line-height: 1.8;
            margin: 25px 0;
        }
        .events {
            margin: 30px 0;
        }
        .event-section {
            background: linear-gradient(135deg, #FFF0F5 0%, #FFE4E1 100%);
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            border-left: 5px solid #FFD700;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        .event-title {
            font-size: 22px;
            color: #C71585;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .event-icon {
            font-size: 28px;
            margin-right: 12px;
        }
        .event-detail {
            margin: 12px 0;
            font-size: 17px;
            color: #4B0082;
            padding-left: 40px;
        }
        .reception {
            background: linear-gradient(135deg, #FFD700 0%, #FFC700 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin: 25px 0;
            text-align: center;
            box-shadow: 0 8px 20px rgba(255, 215, 0, 0.4);
        }
        .reception-title {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .reception-details {
            font-size: 18px;
            line-height: 1.8;
        }
        .dress-code {
            background: white;
            border: 3px dashed #FFB6C1;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            margin: 25px 0;
        }
        .dress-code-title {
            font-size: 20px;
            color: #C71585;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .dress-code-detail {
            font-size: 17px;
            color: #8B008B;
        }
        .footer {
            text-align: center;
            padding: 35px;
            background: linear-gradient(135deg, #FFF0F5 0%, #FFE4E1 100%);
            border-top: 3px solid #FFD700;
        }
        .footer-message {
            font-size: 22px;
            color: #C71585;
            font-style: italic;
            margin-bottom: 15px;
        }
        .rsvp {
            font-size: 16px;
            color: #8B008B;
            margin-top: 15px;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.95);
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            color: #C71585;
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
            <div class="sparkles">✨</div>
            <div class="sparkles">✨</div>
            <div class="sparkles">✨</div>
            <div class="sparkles">✨</div>
            <div class="crown">👑</div>
            <h1>MIS XV AÑOS</h1>
            <div class="number">15</div>
            <div class="subtitle">Una noche para recordar</div>
        </div>

        <div class="content">
            <div class="honoree">
                <div class="honoree-intro">Con mucha ilusión te invito a celebrar</div>
                <div class="honoree-name">Isabella María</div>
                <div class="divider"></div>
            </div>

            <div class="parents">
                Con la bendición de mis padres<br>
                <strong style="font-size: 20px;">Carmen López y Miguel Ángel Torres</strong>
            </div>

            <div class="events">
                <div class="event-section">
                    <div class="event-title">
                        <span class="event-icon">⛪</span>
                        <span>Misa de Acción de Gracias</span>
                    </div>
                    <div class="event-detail">
                        📅 Sábado, 28 de Diciembre, 2024
                    </div>
                    <div class="event-detail">
                        🕕 6:00 PM
                    </div>
                    <div class="event-detail">
                        📍 Catedral de Nuestra Señora<br>
                        &nbsp;&nbsp;&nbsp;&nbsp; Plaza Principal s/n, Centro Histórico
                    </div>
                </div>

                <div class="reception">
                    <div class="reception-title">🎭 Gran Recepción 💃</div>
                    <div class="reception-details">
                        Salón de Eventos "Crystal Palace"<br>
                        Blvd. de los Jardines #567<br><br>
                        <strong style="font-size: 20px;">8:00 PM - 2:00 AM</strong><br><br>
                        Cena • Vals • Baile • Diversión
                    </div>
                </div>

                <div class="dress-code">
                    <div class="dress-code-title">👗 Código de Vestimenta 🤵</div>
                    <div class="dress-code-detail">
                        Gala / Etiqueta<br>
                        <strong style="color: #C71585;">Color Reservado: Rosa</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-message">
                "No hay nada más precioso que este momento,<br>
                y me encantaría compartirlo contigo"
            </div>
            <div style="font-size: 30px; margin: 15px 0;">💖</div>
            <div class="rsvp">
                <strong>Confirma tu asistencia antes del 15 de Diciembre</strong><br>
                📱 +52 55 9876 5432<br>
                ✉️ isabella.xv@email.com
            </div>
        </div>
    </div>
</body>
</html>
