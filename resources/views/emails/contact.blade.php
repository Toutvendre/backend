<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Message de Contact</title>
    <style>
        /* Force dark mode styles */
        body {
            background-color: #121212 !important;
            color: #ffffff !important;
        }

        .container {
            background-color: #121212 !important;
            border: 1px solid #2a2a2a !important;
        }

        .content {
            color: #ffffff !important;
        }

        .title,
        .field-value {
            color: #ffffff !important;
        }

        .subtitle,
        .field-label,
        .footer-text {
            color: #b0b0b0 !important;
        }

        .message-box {
            background: linear-gradient(180deg, #1e1e1e, #2a2a2a) !important;
            color: #ffffff !important;
            border: 1px solid #3a3a3a !important;
        }

        .button {
            background: linear-gradient(90deg, #1e88e5, #1565c0) !important;
            color: #ffffff !important;
            border: 2px solid #ffffff !important;
        }

        .footer {
            background-color: #1a1a1a !important;
            border-top: 1px solid #2a2a2a !important;
        }

        a {
            color: #1e88e5 !important;
        }

        /* Responsive adjustments for small screens */
        @media only screen and (max-width: 600px) {
            .container {
                width: 100% !important;
                max-width: 100% !important;
                padding: 10px !important;
            }

            .content {
                padding: 30px 20px !important;
            }

            .title {
                font-size: 24px !important;
            }

            .subtitle {
                font-size: 12px !important;
                margin-bottom: 20px !important;
            }

            .field-label {
                font-size: 9px !important;
            }

            .field-value {
                font-size: 16px !important;
            }

            .message-box {
                font-size: 15px !important;
                padding: 15px !important;
            }

            .button {
                padding: 12px 30px !important;
                font-size: 15px !important;
            }

            .footer {
                padding: 20px !important;
            }

            .social-icon {
                width: 28px !important;
                height: 28px !important;
            }
        }
    </style>
</head>

<body
    style="margin: 0; padding: 0; font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; background-color: #121212; line-height: 1.5; color: #ffffff;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
        style="background-color: #121212; padding: 10px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" class="container"
                    style="max-width: 600px; background-color: #121212; border-radius: 16px; border: 1px solid #2a2a2a; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);">
                    <!-- Content -->
                    <tr>
                        <td class="content" style="padding: 50px 30px; color: #ffffff;">
                            <!-- Geometric Accent -->
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
                                style="margin-bottom: 20px;">
                                <tr>
                                    <td align="center">
                                        <div
                                            style="width: 60px; height: 5px; background: linear-gradient(90deg, #ffffff, #1e88e5); border-radius: 2px;">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <h1 class="title"
                                style="font-family: 'Playfair Display', serif; font-size: 28px; font-weight: 900; margin: 0 0 8px; color: #ffffff; text-align: center; letter-spacing: -0.5px;">
                                Message Reçu
                            </h1>
                            <p class="subtitle"
                                style="font-size: 13px; font-weight: 400; color: #b0b0b0; margin: 0 0 30px; text-align: center; letter-spacing: 0.3px;">
                                Un nouveau contact depuis votre portfolio.
                            </p>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding: 12px 0;">
                                        <span class="field-label"
                                            style="font-size: 9px; font-weight: 700; color: #b0b0b0; text-transform: uppercase; letter-spacing: 1.2px;">Nom</span><br>
                                        <span class="field-value"
                                            style="font-size: 17px; font-weight: 600; color: #ffffff;">{{ $formData['name'] }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0;">
                                        <span class="field-label"
                                            style="font-size: 9px; font-weight: 700; color: #b0b0b0; text-transform: uppercase; letter-spacing: 1.2px;">Email</span><br>
                                        <span class="field-value"
                                            style="font-size: 17px; font-weight: 600; color: #ffffff;">{{ $formData['email'] }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0;">
                                        <span class="field-label"
                                            style="font-size: 9px; font-weight: 700; color: #b0b0b0; text-transform: uppercase; letter-spacing: 1.2px;">Message</span><br>
                                        <span class="message-box"
                                            style="font-size: 16px; font-weight: 500; color: #ffffff; display: block; background: linear-gradient(180deg, #1e1e1e, #2a2a2a); padding: 20px; border-left: 4px solid #1e88e5; border: 1px solid #3a3a3a; border-radius: 6px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">{{ $formData['message'] }}</span>
                                    </td>
                                </tr>
                            </table>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0"
                                style="margin-top: 40px;">
                                <tr>
                                    <td align="center">
                                        <a href="mailto:{{ $formData['email'] }}" class="button"
                                            style="display: inline-block; padding: 14px 40px; background: linear-gradient(90deg, #1e88e5, #1565c0); color: #ffffff; text-decoration: none; border-radius: 12px; font-size: 16px; font-weight: 700; border: 2px solid #ffffff; box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);">
                                            Répondre à {{ $formData['name'] }}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td class="footer"
                            style="background-color: #1a1a1a; padding: 25px; text-align: center; border-top: 1px solid #2a2a2a; border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;">
                            <p style="font-size: 15px; font-weight: 600; color: #ffffff; margin: 0 0 8px;">KI Brou
                                Alexis</p>
                            <p class="footer-text"
                                style="font-size: 12px; font-weight: 400; color: #b0b0b0; margin: 0 0 15px;">Développeur
                                Web | Visionnaire Digital</p>
                            <table role="presentation" align="center" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding: 0 15px;">
                                        <a href="https://www.linkedin.com/in/alexis-ki-099781358"
                                            style="text-decoration: none;">
                                            <img src="https://img.icons8.com/ios-filled/30/ffffff/linkedin.png"
                                                alt="LinkedIn" class="social-icon"
                                                style="width: 30px; height: 30px; vertical-align: middle;">
                                        </a>
                                    </td>
                                    <td style="padding: 0 15px;">
                                        <a href="https://github.com/Toutvendre" style="text-decoration: none;">
                                            <img src="https://img.icons8.com/ios-filled/30/ffffff/github.png"
                                                alt="GitHub" class="social-icon"
                                                style="width: 30px; height: 30px; vertical-align: middle;">
                                        </a>
                                    </td>
                                    <td style="padding: 0 15px;">
                                        <a href="https://x.com/AlexisKI07" style="text-decoration: none;">
                                            <img src="https://img.icons8.com/ios-filled/30/ffffff/twitter.png"
                                                alt="Twitter" class="social-icon"
                                                style="width: 30px; height: 30px; vertical-align: middle;">
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p class="footer-text"
                                style="font-size: 11px; font-weight: 400; color: #b0b0b0; margin: 20px 0 0;">Depuis <a
                                    href="{{ env('APP_URL') }}"
                                    style="color: #1e88e5; text-decoration: none; font-weight: 600;">mon portfolio</a> |
                                © {{ now()->year }} KI Brou Alexis</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
