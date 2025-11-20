<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación Primera Comunión</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Palatino Linotype', 'Book Antiqua', 'Georgia', serif;
            background: linear-gradient(135deg, #FFFACD 0%, #F0E68C 50%, #FFE4B5 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .invitation-card {
            background: white;
            border-radius: 20px;
            padding: 0;
            max-width: 680px;
            width: 100%;
            box-shadow: 0 25px 50px rgba(184, 134, 11, 0.3);
            overflow: hidden;
            border: 4px solid #DAA520;
        }
        .top-banner {
            height: 10px;
            background: linear-gradient(90deg, #DAA520, #F0E68C, #DAA520);
        }
        .header {
            background: linear-gradient(135deg, #FFFEF0 0%, #FFF9E6 100%);
            padding: 45px 30px;
            text-align: center;
            position: relative;
        }
        .chalice {
            font-size: 70px;
            margin-bottom: 20px;
            filter: drop-shadow(3px 3px 5px rgba(0, 0, 0, 0.2));
        }
        .divine-elements {
            position: absolute;
            font-size: 35px;
            opacity: 0.4;
        }
        .divine-elements:nth-child(1) { top: 30px; left: 40px; }
        .divine-elements:nth-child(2) { top: 35px; right: 40px; }
        h1 {
            color: #8B4513;
            font-size: 44px;
            margin: 15px 0;
            font-weight: normal;
            letter-spacing: 3px;
        }
        .sacrament {
            font-size: 24px;
            color: #B8860B;
            font-style: italic;
            margin-top: 10px;
        }
        .content {
            padding: 40px;
        }
        .bible-verse {
            text-align: center;
            font-size: 17px;
            color: #8B4513;
            font-style: italic;
            line-height: 1.8;
            padding: 25px;
            background: linear-gradient(135deg, #FFF8DC 0%, #FFEBCD 100%);
            border-radius: 15px;
            margin: 25px 0;
            border: 2px solid #DAA520;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .verse-reference {
            margin-top: 12px;
            font-weight: bold;
            color: #A0522D;
        }
        .child-section {
            text-align: center;
            margin: 35px 0;
        }
        .child-intro {
            font-size: 20px;
            color: #B8860B;
            margin-bottom: 15px;
        }
        .child-name {
            font-size: 42px;
            color: #8B4513;
            font-weight: bold;
            margin: 20px 0;
        }
        .child-photo-placeholder {
            width: 150px;
            height: 150px;
            margin: 20px auto;
            border-radius: 50%;
            background: linear-gradient(135deg, #F0E68C 0%, #DAA520 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            border: 5px solid #DAA520;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .divider {
            width: 200px;
            height: 2px;
            background: linear-gradient(to right, transparent, #DAA520, transparent);
            margin: 25px auto;
        }
        .family {
            text-align: center;
            font-size: 18px;
            color: #A0522D;
            margin: 25px 0;
            line-height: 1.8;
        }
        .event-details {
            background: white;
            border: 3px solid #F0E68C;
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .event-item {
            display: flex;
            align-items: flex-start;
            margin: 20px 0;
            font-size: 17px;
            color: #654321;
        }
        .event-icon {
            font-size: 28px;
            margin-right: 15px;
            min-width: 35px;
        }
        .event-content {
            flex: 1;
        }
        .event-label {
            font-weight: bold;
            color: #8B4513;
            font-size: 18px;
            display: block;
            margin-bottom: 5px;
        }
        .celebration-box {
            background: linear-gradient(135deg, #DAA520 0%, #B8860B 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            margin: 25px 0;
            box-shadow: 0 8px 20px rgba(184, 134, 11, 0.4);
        }
        .celebration-title {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .celebration-details {
            font-size: 18px;
            line-height: 1.8;
        }
        .footer {
            text-align: center;
            padding: 35px;
            background: linear-gradient(135deg, #FFFEF0 0%, #FFF9E6 100%);
            border-top: 3px solid #DAA520;
        }
        .blessing {
            font-size: 20px;
            color: #8B4513;
            font-style: italic;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .contact-info {
            font-size: 16px;
            color: #A0522D;
            margin-top: 15px;
        }
        .angels {
            font-size: 35px;
            margin: 15px 0;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.95);
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            color: #8B4513;
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
        <div class="top-banner"></div>

        <div class="header">
            <div class="divine-elements">✨</div>
            <div class="divine-elements">✨</div>
            <div class="chalice">🍷</div>
            <h1>PRIMERA COMUNIÓN</h1>
            <div class="sacrament">Sacramento de la Eucaristía</div>
        </div>

        <div class="content">
            <div class="bible-verse">
                "Yo soy el pan de vida; el que viene a mí nunca tendrá hambre,<br>
                y el que cree en mí no tendrá sed jamás."
                <div class="verse-reference">Juan 6:35</div>
            </div>

            <div class="angels">👼 ✨ 👼</div>

            <div class="child-section">
                <div class="child-intro">Con la gracia de Dios, invitamos a la</div>
                <div class="child-intro" style="font-size: 24px; font-weight: bold;">Primera Comunión de</div>

                <div class="child-photo-placeholder">
                    📿
                </div>

                <div class="child-name">Daniela Sofía Méndez</div>

                <div class="divider"></div>

                <div class="family">
                    Sus padres<br>
                    <strong style="font-size: 20px;">Ana María Méndez y Roberto Carlos Hernández</strong><br><br>
                    Sus padrinos<br>
                    <strong style="font-size: 20px;">Teresa González y Fernando López</strong>
                </div>
            </div>

            <div class="event-details">
                <div class="event-item">
                    <span class="event-icon">⛪</span>
                    <div class="event-content">
                        <span class="event-label">Santa Misa</span>
                        Iglesia del Sagrado Corazón<br>
                        Calle Morelos #234, Colonia Centro
                    </div>
                </div>
                <div class="event-item">
                    <span class="event-icon">📅</span>
                    <div class="event-content">
                        <span class="event-label">Fecha</span>
                        Domingo, 5 de Enero, 2025
                    </div>
                </div>
                <div class="event-item">
                    <span class="event-icon">🕐</span>
                    <div class="event-content">
                        <span class="event-label">Hora</span>
                        11:00 AM
                    </div>
                </div>
            </div>

            <div class="celebration-box">
                <div class="celebration-title">🎊 Celebración 🎊</div>
                <div class="celebration-details">
                    Al término de la ceremonia religiosa<br>
                    Salón "Los Cedros"<br>
                    Av. Juárez #890<br><br>
                    <strong style="font-size: 20px;">Comida • Convivencia • Alegría</strong>
                </div>
            </div>

            <div style="text-align: center; padding: 20px; background: #FFFEF0; border-radius: 10px; margin: 20px 0;">
                <div style="font-size: 18px; color: #8B4513; margin-bottom: 10px;">
                    <strong>🎁 Sugerencia de Regalo 🎁</strong>
                </div>
                <div style="font-size: 16px; color: #A0522D;">
                    Biblia infantil, rosario o libro de oraciones
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="blessing">
                "Que la luz de Cristo ilumine siempre tu camino"
            </div>
            <div style="font-size: 40px; margin: 15px 0;">🙏</div>
            <div class="contact-info">
                <strong>Favor de confirmar asistencia</strong><br>
                📱 +52 55 4567 8901<br>
                ✉️ daniela.comunion@email.com
            </div>
        </div>
    </div>
</body>
</html>
