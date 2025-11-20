<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación de Bautizo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Garamond', 'Georgia', serif;
            background: linear-gradient(135deg, #89CFF0 0%, #B0E0E6 50%, #E0F6FF 100%);
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
            max-width: 650px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            border: 3px solid #87CEEB;
        }
        .header {
            background: linear-gradient(135deg, #E0F6FF 0%, #B0E0E6 100%);
            padding: 50px 30px 30px;
            text-align: center;
            position: relative;
        }
        .cross {
            font-size: 60px;
            color: #4A90A4;
            margin-bottom: 20px;
            filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.1));
        }
        .dove {
            position: absolute;
            font-size: 35px;
            opacity: 0.3;
        }
        .dove:nth-child(1) { top: 20px; left: 30px; }
        .dove:nth-child(2) { top: 30px; right: 30px; }
        h1 {
            color: #4A90A4;
            font-size: 42px;
            margin: 15px 0;
            font-weight: normal;
            letter-spacing: 2px;
        }
        .subtitle {
            color: #5F9EA0;
            font-size: 20px;
            font-style: italic;
            margin-top: 10px;
        }
        .content {
            padding: 40px;
        }
        .blessing {
            text-align: center;
            font-size: 16px;
            color: #5F9EA0;
            font-style: italic;
            margin-bottom: 30px;
            line-height: 1.6;
            padding: 20px;
            background: #F0F8FF;
            border-radius: 10px;
            border-left: 4px solid #87CEEB;
        }
        .child-info {
            text-align: center;
            margin: 30px 0;
        }
        .child-name {
            font-size: 38px;
            color: #4A90A4;
            font-weight: bold;
            margin: 15px 0;
        }
        .parents {
            font-size: 18px;
            color: #5F9EA0;
            margin-top: 15px;
        }
        .divider {
            width: 150px;
            height: 2px;
            background: linear-gradient(to right, transparent, #87CEEB, transparent);
            margin: 25px auto;
        }
        .details {
            background: linear-gradient(135deg, #FFFACD 0%, #FFF8DC 100%);
            border-radius: 15px;
            padding: 30px;
            margin: 25px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 2px solid #F0E68C;
        }
        .detail-item {
            display: flex;
            align-items: flex-start;
            margin: 18px 0;
            font-size: 17px;
            color: #2F4F4F;
        }
        .detail-icon {
            font-size: 24px;
            margin-right: 15px;
            min-width: 30px;
        }
        .detail-text {
            flex: 1;
        }
        .detail-label {
            font-weight: bold;
            color: #4A90A4;
            display: block;
            margin-bottom: 5px;
        }
        .godparents {
            background: white;
            padding: 25px;
            border-radius: 15px;
            margin: 25px 0;
            border: 2px solid #B0E0E6;
        }
        .godparents-title {
            text-align: center;
            font-size: 22px;
            color: #4A90A4;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .godparent-names {
            text-align: center;
            font-size: 18px;
            color: #5F9EA0;
            line-height: 1.8;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, #E0F6FF 0%, #F0F8FF 100%);
            color: #4A90A4;
        }
        .reception {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        .reception-details {
            font-size: 16px;
            color: #5F9EA0;
            line-height: 1.6;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.95);
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            color: #4A90A4;
            font-weight: bold;
            transition: all 0.3s;
            z-index: 10;
            font-family: Arial, sans-serif;
        }
        .back-link:hover {
            background: white;
            transform: scale(1.05);
        }
        .angel {
            text-align: center;
            font-size: 40px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <a href="{{ route('home') }}" class="back-link">← Volver</a>

    <div class="invitation-card">
        <div class="header">
            <div class="dove">🕊️</div>
            <div class="dove">🕊️</div>
            <div class="cross">✝️</div>
            <h1>BAUTIZO</h1>
            <div class="subtitle">Sacramento del Bautismo</div>
        </div>

        <div class="content">
            <div class="blessing">
                "Dejen que los niños vengan a mí, y no se lo impidan,<br>
                porque el reino de los cielos es de quienes son como ellos."<br>
                <strong>- Mateo 19:14</strong>
            </div>

            <div class="angel">👼</div>

            <div class="child-info">
                <div style="font-size: 20px; color: #5F9EA0;">Con gran alegría invitamos al Bautizo de</div>
                <div class="child-name">Gabriel Antonio</div>
                <div class="divider"></div>
                <div class="parents">
                    Hijo de<br>
                    <strong>María González y Antonio Ramírez</strong>
                </div>
            </div>

            <div class="details">
                <div class="detail-item">
                    <span class="detail-icon">⛪</span>
                    <div class="detail-text">
                        <span class="detail-label">Ceremonia Religiosa</span>
                        Parroquia de San Miguel Arcángel<br>
                        Calle Principal #789, Centro
                    </div>
                </div>
                <div class="detail-item">
                    <span class="detail-icon">📅</span>
                    <div class="detail-text">
                        <span class="detail-label">Fecha</span>
                        Domingo, 22 de Diciembre, 2024
                    </div>
                </div>
                <div class="detail-item">
                    <span class="detail-icon">🕐</span>
                    <div class="detail-text">
                        <span class="detail-label">Hora</span>
                        12:00 PM
                    </div>
                </div>
            </div>

            <div class="godparents">
                <div class="godparents-title">🙏 Padrinos 🙏</div>
                <div class="godparent-names">
                    Laura Patricia Hernández<br>
                    y<br>
                    Carlos Eduardo Morales
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="reception">🥂 Recepción</div>
            <div class="reception-details">
                Al término de la ceremonia<br>
                Salón "Jardín de los Ángeles"<br>
                Av. de las Flores #321<br><br>
                <strong>¡Esperamos contar con tu presencia!</strong>
            </div>
        </div>
    </div>
</body>
</html>
