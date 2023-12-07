<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Em Criação - Aguarde</title>
        <link rel="icon" type="image/x-icon" href="https://hpanel.hostinger.com/favicons/hostinger.png">
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Em Criação - Aguarde" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
        <style>
            body {
                margin: 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100vw;
                height: 100vh;
                min-height: 675px;
                background-color: #F4F5FF;
                font-family: 'DM Sans', sans-serif;
            }
            #loader-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255, 255, 255, 0.9);
                display: flex;
                align-items: center;
                justify-content: center;
                visibility: hidden;
                transition: visibility 0s, opacity 0.5s linear;
            }
            #loader {
                border: 8px solid #f3f3f3;
                border-top: 8px solid #3498db;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 1s linear infinite;
            }
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
                z-index: 1;
            }
            h1, p, .link-container {
                width: 80%;
                text-align: center;
                max-width: 550px;
            }
            p {
                font-size: 16px;
                color: #727586;
                margin: 0;
            }
            h1 {
                font-size: 24px;
                font-weight: 700;
                margin: 8px 0;
            }
            .link-container {
                margin-top: 32px;
                margin-bottom: 32px;
            }
            .link {
                display: flex;
                align-items: center;
                font-weight: 700;
                font-size: 14px;
                color: #673DE6;
                margin-top: 8px;
                text-decoration: none;
            }
            .ic-launch  {
                margin-left: 10.5px;
                width: 21px !important;
                height: 20px !important;
            }
        </style>
    </head>
    <body>
        <div id="loader-container">
            <div id="loader"></div>
        </div>
        <div class="content">
            <svg 
                class="main-image"
                width="650" 
                height="406" 
                viewBox="0 0 650 406" 
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Restante do seu código SVG -->
            </svg>
            <h1>Está tudo pronto!</h1>
            <p>Tudo o que tem de fazer agora é carregar os ficheiros do seu site e iniciar a sua jornada. Veja como fazer isto abaixo:</p>
            <div class="link-container">
                <a 
                    class="link"
                    href="https://support.hostinger.com/en/articles/4455931-how-can-i-migrate-website-to-hostinger"
                    rel="nofollow"
                    target="_blank"
                >
                    Como posso migrar um site para a Hostinger? 
                    <svg class="ic-launch" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Ícone de link -->
                    </svg>
                </a>
                <a 
                    class="link"
                    href="https://support.hostinger.com/en/articles/3220304-how-to-install-wordpress-using-auto-installer"
                    rel="nofollow"
                    target="_blank"
                >
                    Como instalar o WordPress com o Instalador Automático?
                    <svg class="ic-launch" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Ícone de link -->
                    </svg>
                </a>
            </div>
        </div>

        <script>
            // Simula um tempo de carregamento para demonstração
            setTimeout(function () {
                document.getElementById('loader-container').style.visibility = 'hidden';
            }, 3000);
        </script>
    </body>
</html>
