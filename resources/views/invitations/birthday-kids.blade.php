<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación de Cumpleaños Infantil</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Comic Sans MS', 'Arial Rounded MT Bold', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .invitation-card {
            background: white;
            border-radius: 30px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }
        .invitation-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .content {
            position: relative;
            z-index: 1;
        }
        .balloon {
            position: absolute;
            font-size: 50px;
            animation: float 3s ease-in-out infinite;
        }
        .balloon:nth-child(1) { top: 20px; left: 20px; animation-delay: 0s; }
        .balloon:nth-child(2) { top: 50px; right: 30px; animation-delay: 1s; }
        .balloon:nth-child(3) { bottom: 30px; left: 40px; animation-delay: 2s; }
        .balloon:nth-child(4) { bottom: 60px; right: 20px; animation-delay: 1.5s; }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        h1 {
            color: #ff6b6b;
            font-size: 48px;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 3px 3px 0px #ffd93d;
        }
        .celebration {
            text-align: center;
            font-size: 60px;
            margin-bottom: 20px;
        }
        .guest-name {
            text-align: center;
            font-size: 28px;
            color: #4ecdc4;
            margin-bottom: 30px;
        }
        .details {
            background: linear-gradient(135deg, #ffd93d 0%, #ff9a3c 100%);
            border-radius: 20px;
            padding: 25px;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .detail-item {
            display: flex;
            align-items: center;
            margin: 15px 0;
            font-size: 20px;
            color: #333;
        }
        .detail-item .icon {
            font-size: 30px;
            margin-right: 15px;
        }
        .age {
            text-align: center;
            font-size: 72px;
            color: #ff6b6b;
            font-weight: bold;
            margin: 20px 0;
            text-shadow: 2px 2px 0px #ffd93d;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 20px;
            color: #667eea;
            font-weight: bold;
        }
        .stars {
            text-align: center;
            font-size: 30px;
            margin: 10px 0;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            color: #667eea;
            font-weight: bold;
            transition: all 0.3s;
            z-index: 10;
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
        <div class="balloon">🎈</div>
        <div class="balloon">🎈</div>
        <div class="balloon">🎈</div>
        <div class="balloon">🎈</div>

        <div class="content">
            <div class="celebration">🎉🎂🎉</div>
            <h1>¡Estás Invitado!</h1>

            <div class="guest-name">
                <strong>Sofía</strong> cumple
            </div>

            <div class="age">7 AÑOS</div>

            <div class="stars">✨ ⭐ ✨</div>

            <div class="details">
                <div class="detail-item">
                    <span class="icon">📅</span>
                    <strong>Fecha:</strong>&nbsp;Sábado, 15 de Diciembre, 2024
                </div>
                <div class="detail-item">
                    <span class="icon">🕐</span>
                    <strong>Hora:</strong>&nbsp;3:00 PM
                </div>
                <div class="detail-item">
                    <span class="icon">📍</span>
                    <strong>Lugar:</strong>&nbsp;Salón de Fiestas "Happy Kids"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Av. Principal #123
                </div>
                <div class="detail-item">
                    <span class="icon">🎮</span>
                    <strong>Diversión:</strong>&nbsp;Juegos, música y sorpresas
                </div>
            </div>

            <div class="footer">
                ¡No faltes, será increíble! 🎊
            </div>
        </div>
    </div>
</body>
</html>
